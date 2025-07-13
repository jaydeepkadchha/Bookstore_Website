<?php 
include("db.php"); 

// Fetch all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Manage Users - BookReBoot Admin</title>
  <link rel="icon" href="assets/img/logo5.png">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom Styles -->
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

    .btn-primary {
      background-color: #001f3f;
      border: none;
    }

    .btn-primary:hover {
      background-color: #003366;
    }

    .btn-warning {
      background-color: #ffc107;
      color: #000;
      border: none;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

    .table th {
      background-color: #001f3f;
      color: white;
    }

    .table td, .table th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2 class="text-center">👤 Manage Users</h2>

    <div class="d-flex justify-content-between mb-3">
      <a href="admin_index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
      <a href="add_user.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New User</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= htmlspecialchars($row['user_name']) ?></td>
              <td><?= htmlspecialchars($row['full_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['phone_number']) ?></td>
              <td><?= htmlspecialchars($row['address']) ?></td>
              <td><?= ucfirst($row['role']) ?></td>
              <td>
                <a href="edit_user.php?user_name=<?= urlencode($row['user_name']) ?>" class="btn btn-sm btn-warning">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="delete_user.php?user_name=<?= urlencode($row['user_name']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
