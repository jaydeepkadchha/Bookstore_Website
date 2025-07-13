<?php
include("session.php");
include("db.php");
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$book_id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$payment_mode = $_POST['mode'] ?? 'cod';
$qty = isset($_POST['qty']) ? intval($_POST['qty']) : 1;

// Get book info
$book_query = "SELECT * FROM books WHERE book_id = $book_id";
$book_result = mysqli_query($conn, $book_query);
$book = mysqli_fetch_assoc($book_result);

if (!$book) {
    die("Book not found.");
}

if ($qty > $book['quantity']) {
    die("Not enough stock.");
}

if ($book['quantity'] <= 0) {
    die("Sorry, this book is out of stock.");
}

$price = $book['price'];
$total_amount = $price * $qty;

$user_name = $_SESSION['user_name'];
$order_date = date("Y-m-d H:i:s");



$price = $book['price'];
$total_amount = $price * $qty;

if ($book['quantity'] <= 0) {
    die("Sorry, this book is out of stock.");
}


// Insert into orders table (using user_name instead of user_id)
// Insert order
$order_insert = "INSERT INTO orders (user_name, created_at, total_price) 
                 VALUES ('$user_name', '$order_date', '$total_amount')";
mysqli_query($conn, $order_insert);
$order_id = mysqli_insert_id($conn);

// Insert order item
$item_insert = "INSERT INTO order_items (order_id, book_id, price_at_purchase, quantity) 
                VALUES ('$order_id', '$book_id', '$price', '$qty')";
mysqli_query($conn, $item_insert);

// Update quantity
$update_quantity = "UPDATE books SET quantity = quantity - $qty WHERE book_id = $book_id";
mysqli_query($conn, $update_quantity);

// Check and delete if 0
$check_quantity = mysqli_query($conn, "SELECT quantity FROM books WHERE book_id = $book_id");
$qty_row = mysqli_fetch_assoc($check_quantity);
if ($qty_row['quantity'] <= 0) {
    mysqli_query($conn, "DELETE FROM books WHERE book_id = $book_id");
}

// Insert into payment table
$payment_status = 'completed';
$transaction_id = uniqid("TXN_");

$insert_payment = "INSERT INTO payment (order_id, user_name, amount, payment_status, payment_method, transaction_id) 
                   VALUES ('$order_id', '$user_name', '$total_amount', '$payment_status', '$payment_mode', '$transaction_id')";

mysqli_query($conn, $insert_payment);

// Generate PDF
$html = '
        <style>
            body { font-family: DejaVu Sans, sans-serif; }
            .invoice-box {
                max-width: 700px;
                padding: 30px;
                border: 1px solid #eee;
                font-size: 16px;
                line-height: 24px;
            }
            .title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }
            .info {
                margin-bottom: 10px;
            }
            .total {
                font-weight: bold;
                font-size: 18px;
                margin-top: 20px;
            }
        </style>

        <div class="invoice-box">
            <div class="title">BookByte - Invoice</div>
            <div class="info">Invoice Date: ' . $order_date . '</div>
            <div class="info">Order ID: ' . $order_id . '</div>
            <div class="info">Customer: ' . htmlspecialchars($user_name) . '</div>
            <hr>
            <h4>Book Details:</h4>
            <div>Title: ' . $book['title'] . '</div>
            <div>Author: ' . $book['author'] . '</div>
            <div>Quantity: ' . $qty . '</div>
            <div>Price per Book: ₹' . $price . '</div>
            <div class="total">Total Amount: ₹' . $total_amount . '</div>
            
            <div>Payment Mode: ' . $payment_mode . '</div>

            <hr>
            <div class="total">Total Amount: ₹' . $total_amount . '</div>
        </div>';

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("Invoice_BookByte_" . time() . ".pdf", array("Attachment" => true));
exit;
