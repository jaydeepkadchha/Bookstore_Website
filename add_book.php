<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $publisher = $_POST['publisher'];
    $publication_date = $_POST['publication_date'];

    $cover_page_path = $_FILES['cover_page_path']['name'];
    $target = "Image/" . basename($cover_page_path);
    move_uploaded_file($_FILES['cover_page_path']['tmp_name'], $target);

    $sql = "INSERT INTO books (title, author, price, quantity, description, category_id, publisher, publication_date, cover_page_path) 
            VALUES ('$title', '$author', '$price', '$quantity', '$description', '$category_id', '$publisher', '$publication_date', '$cover_page_path')";

    if (mysqli_query($conn, $sql)) {
        header("Location: manage_books.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Book</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Add New Book</h2>
    <form method="POST" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Title" required class="form-control"><br>
      <input type="text" name="author" placeholder="Author" required class="form-control"><br>
      <input type="number" step="0.01" name="price" placeholder="Price" required class="form-control"><br>
      <input type="number" name="quantity" placeholder="Quantity" required class="form-control"><br>
      <textarea name="description" placeholder="Description" class="form-control" required></textarea><br>
      <input type="number" name="category_id" placeholder="Category ID" required class="form-control"><br>
      <input type="text" name="publisher" placeholder="Publisher" class="form-control"><br>
      <input type="date" name="publication_date" class="form-control"><br>
      <input type="file" name="cover_page_path" required class="form-control"><br>
      <button type="submit" class="btn btn-success">Add Book</button>
    </form>
  </div>
</body>
</html>
