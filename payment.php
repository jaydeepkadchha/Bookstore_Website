<?php
session_start();
include("db.php");

$book_id = $_POST['book_id'] ?? $_GET['book_id'] ?? 0;
$qty = $_POST['qty'] ?? $_GET['qty'] ?? 1;

$book_id = intval($book_id);
$qty = intval($qty);

// Fetch book
$query = mysqli_query($conn, "SELECT * FROM books WHERE book_id = '$book_id'");
$book = mysqli_fetch_assoc($query);

if (!$book || $qty > $book['quantity']) {
    die("Invalid request or insufficient stock.");
}

$total = $book['price'] * $qty;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment - BookReBoot</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            color: #1e4356;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #1e4356;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #003c5c;
        }

        .details {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirm Your Payment</h2>

        <div class="details">
            <p><strong>Book:</strong> <?= htmlspecialchars($book['title']) ?></p>
            <p><strong>Author:</strong> <?= htmlspecialchars($book['author']) ?></p>
            <p><strong>Quantity:</strong> <?= $qty ?></p>
            <p><strong>Total Amount:</strong> ₹<?= $total ?></p>
        </div>

        <form id="razorForm">
            <input type="hidden" id="book_id" value="<?= $book_id ?>">
            <input type="hidden" id="qty" value="<?= $qty ?>">
            <button type="button" class="btn" id="payBtn">Pay with Razorpay</button>
        </form>
    </div>

    <script>
    document.getElementById("payBtn").onclick = function () {
        var options = {
            "key": "rzp_test_lbVMY8ZyKWFfX3", // Replace with your Razorpay Key ID
            "amount": <?= $total * 100 ?>, // Amount in paise
            "currency": "INR",
            "name": "BookByte",
            "description": "Book Purchase",
            "handler": function (response) {
                window.location.href = "success.php?book_id=<?= $book_id ?>&qty=<?= $qty ?>&payment_id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "<?= $_SESSION['user_name'] ?? '' ?>"
            },
            "theme": {
                "color": "#1e4356"
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    };
    </script>
</body>
</html>
