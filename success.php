<?php
session_start();
include("db.php");
require_once 'fpdf/fpdf.php'; // ✅ Include FPDF

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check login
if (!isset($_SESSION['user_name'])) {
    die("User not logged in.");
}

$user_name = $_SESSION['user_name'];
$book_id = intval($_GET['book_id'] ?? 0);
$qty = intval($_GET['qty'] ?? 1);
$payment_id = $_GET['payment_id'] ?? '';

if (!$payment_id || !$book_id || !$qty) {
    die("Invalid payment details.");
}

// Fetch book
$query = mysqli_query($conn, "SELECT * FROM books WHERE book_id = '$book_id'");
$book = mysqli_fetch_assoc($query);

if (!$book || $qty > $book['quantity']) {
    die("Book not found or out of stock.");
}

$total = $book['price'] * $qty;
$order_date = date("Y-m-d H:i:s");

// Insert order
mysqli_query($conn, "INSERT INTO orders (user_name, created_at, total_price) 
VALUES ('$user_name', '$order_date', '$total')");
$order_id = mysqli_insert_id($conn);

// Insert item
mysqli_query($conn, "INSERT INTO order_items (order_id, book_id, price_at_purchase, quantity) 
VALUES ('$order_id', '$book_id', '{$book['price']}', '$qty')");

// Update stock
mysqli_query($conn, "UPDATE books SET quantity = quantity - $qty WHERE book_id = $book_id");

// Insert payment
mysqli_query($conn, "INSERT INTO payment (order_id, user_name, amount, payment_status, payment_method, transaction_id)
VALUES ('$order_id', '$user_name', '$total', 'completed', 'razorpay', '$payment_id')");

// ✅ Generate PDF using FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'BookByte - Invoice', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Invoice Date: $order_date", 0, 1);
$pdf->Cell(0, 10, "Order ID: $order_id", 0, 1);
$pdf->Cell(0, 10, "User: $user_name", 0, 1);

$pdf->Ln(5);
$pdf->Cell(0, 10, "Book: {$book['title']}", 0, 1);
$pdf->Cell(0, 10, "Author: {$book['author']}", 0, 1);
$pdf->Cell(0, 10, "Quantity: $qty", 0, 1);
$pdf->Cell(0, 10, "Price per book: ₹{$book['price']}", 0, 1);
$pdf->Cell(0, 10, "Total: ₹$total", 0, 1);
$pdf->Cell(0, 10, "Payment ID: $payment_id", 0, 1);

$pdf->Output("D", "BookByte_Invoice_$order_id.pdf"); // 'D' = download
exit;
?>
