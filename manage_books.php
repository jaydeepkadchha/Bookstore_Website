<?php
include("db.php");

// DELETE OPERATION
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM books WHERE book_id=$id");
    header("Location: manage_books.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Books - BookReBoot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { background-color: #f4f6f9; font-family: 'Poppins', sans-serif; }
    h2 { color: #001f3f; font-weight: bold; margin-bottom: 30px; }
    .btn-primary { background-color: #001f3f; border: none; }
    .btn-primary:hover { background-color: #003366; }
    .table th { background-color: #001f3f; color: white; }
    .book-cover { width: 50px; height: auto; border-radius: 5px; }
    .btn-sm { font-size: 14px; }
    #searchInput { width: 300px; margin-bottom: 20px; }
  </style>
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center">📚 Manage Books</h2>
  <div class="d-flex justify-content-between mb-3">
    <a href="admin_index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
    <a href="add_book.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Book</a>
  </div>

  <!-- 🔍 Search Box -->
  <div class="mb-3">
    <input type="text" id="searchInput" class="form-control" placeholder="Search by title or author...">
  </div>

  <!-- 📄 Search Results -->
  <div id="searchResults">
    <!-- Loaded dynamically by AJAX -->
  </div>
</div>

<!-- Bootstrap JS + jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    function fetchBooks(query = "") {
      $.ajax({
        url: "search_books.php",
        method: "GET",
        data: { q: query },
        success: function (data) {
          $("#searchResults").html(data);
        }
      });
    }

    // Load all books initially
    fetchBooks();

    // Trigger search on input
    $("#searchInput").on("keyup", function () {
      const searchTerm = $(this).val();
      fetchBooks(searchTerm);
    });
  });
</script>
</body>
</html>
