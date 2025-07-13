<?php
include("db.php");

// DELETE action
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM cart WHERE cart_id = $id");
    header("Location: manage_cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Manage Cart - BookReBoot Admin</title>
  <link rel="icon" href="assets/img/logo5.png">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      margin-top: 60px;
    }

    h2 {
      color: #001f3f;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .table th {
      background-color: #001f3f;
      color: white;
    }

    .btn-danger {
      background-color: #dc3545;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

    .btn-back {
      background-color: #6c757d;
      color: white;
    }

    .btn-back:hover {
      background-color: #5a6268;
    }

    .table td, .table th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>User Carts</h2>
      <a href="admin_index.php" class="btn btn-back"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Cart ID</th>
            <th>Username</th>
            <th>Book Title</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT cart.cart_id, cart.user_name, books.title, books.price 
                    FROM cart 
                    JOIN books ON cart.book_id = books.book_id";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
              $total = $row['price']; // You can expand this if quantity is added later
              echo "<tr>
                      <td>{$row['cart_id']}</td>
                      <td>{$row['user_name']}</td>
                      <td>{$row['title']}</td>
                      <td>₹{$row['price']}</td>
                      <td>₹$total</td>
                      <td>
                        <a href='?delete={$row['cart_id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Remove this item?')\">
                          <i class='bi bi-trash'></i> Delete
                        </a>
                      </td>
                    </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
