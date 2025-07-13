<?php
include("db.php");

$order_id = $_GET['id'];

$sql = "SELECT o.*, u.full_name 
        FROM orders o 
        JOIN users u ON o.user_name = u.user_name 
        WHERE o.order_id = $order_id";
$order = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$item_query = "SELECT oi.*, b.title 
               FROM order_items oi 
               JOIN books b ON oi.book_id = b.book_id 
               WHERE oi.order_id = $order_id";
$item_result = mysqli_query($conn, $item_query);
?>
<link rel="stylesheet" href="assets/css/manage.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Details</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Order #<?php echo $order['order_id']; ?> - <?php echo $order['full_name']; ?></h2>
    <p><strong>Date:</strong> <?php echo $order['created_at']; ?></p>
    <p><strong>Status:</strong> <?php echo $order['order_status']; ?></p>
    <p><strong>Total:</strong> ₹<?php echo $order['total_price']; ?></p>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Book</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($item = mysqli_fetch_assoc($item_result)) {
          $subtotal = $item['price_at_purchase'] * $item['quantity'];
          echo "<tr>
                  <td>{$item['title']}</td>
                  <td>₹{$item['price_at_purchase']}</td>
                  <td>{$item['quantity']}</td>
                  <td>₹$subtotal</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
    <a href="manage_orders.php" class="btn btn-secondary">Back to Orders</a>
  </div>
</body>
</html>
