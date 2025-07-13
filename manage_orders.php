<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Manage Orders & Sales - BookReBoot Admin</title>
  <link rel="icon" href="assets/img/logo5.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      margin-top: 60px;
    }

    h2 {
      color: #001f3f;
      font-weight: 600;
      margin-bottom: 30px;
    }

    .table th {
      background-color: #001f3f;
      color: white;
    }

    .table td,
    .table th {
      text-align: center;
      vertical-align: middle;
    }

    .btn-info {
      background-color: #17a2b8;
      border: none;
    }

    .btn-info:hover {
      background-color: #138496;
    }

    .btn-back {
      background-color: #6c757d;
      color: white;
    }

    .btn-back:hover {
      background-color: #5a6268;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Orders & Sales</h2>
      <a href="admin_index.php" class="btn btn-back"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>User</th>
            <th>Date</th>
            <th>Status</th>
            <th>Total Amount</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM orders ORDER BY created_at DESC";
          $result = mysqli_query($conn, $sql);

          while ($order = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$order['order_id']}</td>
                    <td>{$order['user_name']}</td>
                    <td>{$order['created_at']}</td>
                    <td><span class='badge bg-success'>{$order['order_status']}</span></td>
                    <td>₹{$order['total_price']}</td>
                    <td>
                      <a href='view_order.php?id={$order['order_id']}' class='btn btn-sm btn-info'>
                        <i class='bi bi-eye'></i> View
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
