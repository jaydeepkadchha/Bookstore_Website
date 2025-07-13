<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

$id = intval($_GET['id']); // Secure ID
$result = mysqli_query($conn, "SELECT * FROM books WHERE book_id=$id");
$book = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Securely escape inputs
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $publication_date = mysqli_real_escape_string($conn, $_POST['publication_date']);

    $img_query = "";
    if (!empty($_FILES['cover_page_path']['name'])) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
        if (in_array($_FILES['cover_page_path']['type'], $allowed_types)) {
            $cover_page_path = $_FILES['cover_page_path']['name'];
            $target = "Image/" . basename($cover_page_path);
            move_uploaded_file($_FILES['cover_page_path']['tmp_name'], $target);
            $img_query = ", cover_page_path='$cover_page_path'";
        } else {
            echo "Invalid file type. Only JPG and PNG are allowed.";
            exit;
        }
    }

    $sql = "UPDATE books SET 
        title='$title', 
        author='$author', 
        price='$price', 
        quantity='$quantity', 
        description='$description', 
        category_id='$category_id',
        publisher='$publisher',
        publication_date='$publication_date'
        $img_query
        WHERE book_id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: manage_books.php");
        exit();
    } else {
        echo "Error updating book: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
</head>
<body>
<div class="container">
    <h2>Edit Book</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" value="<?php echo htmlspecialchars($book['title']); ?>" required class="form-control"><br>
        <input type="text" name="author" value="<?php echo htmlspecialchars($book['author']); ?>" required class="form-control"><br>
        <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($book['price']); ?>" required class="form-control"><br>
        <input type="number" name="quantity" value="<?php echo htmlspecialchars($book['quantity']); ?>" required class="form-control"><br>
        <textarea name="description" class="form-control" required><?php echo htmlspecialchars($book['description']); ?></textarea><br>
        <input type="number" name="category_id" value="<?php echo htmlspecialchars($book['category_id']); ?>" required class="form-control"><br>
        <input type="text" name="publisher" value="<?php echo htmlspecialchars($book['publisher']); ?>" class="form-control"><br>
        <input type="date" name="publication_date" value="<?php echo htmlspecialchars($book['publication_date']); ?>" class="form-control"><br>
        <p>Current Image: <img src="Image/<?php echo htmlspecialchars($book['cover_page_path']); ?>" width="80" alt="Book Cover"></p>
        <input type="file" name="cover_page_path" class="form-control"><br>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
</body>
</html>
