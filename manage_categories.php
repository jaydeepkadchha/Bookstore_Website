<?php 
include("db.php"); 

// Fetch all categories
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Manage Categories - BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png">

  <!-- Bootstrap 5 & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Optional Custom Styling -->
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

    .table th {
      background-color: #001f3f;
      color: white;
    }

    .btn-warning {
      background-color: #ffc107;
      color: #000;
      border: none;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
      border: none;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

    .table td, .table th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2 class="text-center">📁 Manage Categories</h2>

    <div class="d-flex justify-content-between mb-3">
      <a href="admin_index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
      <a href="add_category.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Category</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?php echo $row['category_id']; ?></td>
              <td><?php echo $row['category_name']; ?></td>
              <td>
                <a href="edit_category.php?id=<?php echo $row['category_id']; ?>" class="btn btn-sm btn-warning">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="delete_category.php?id=<?php echo $row['category_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
