<?php
session_start(); // Start session if user info is stored in session

$bookid = $_GET['id'];
include("db.php");


if ($conn) {
    // Fetch username from session (assuming user logged in)
    if (isset($_SESSION['user_name'])) {
        $username = $_SESSION['user_name'];
        
        // First check if the book exists
        $check_book = "SELECT * FROM books WHERE book_id = '$bookid'";
        $book_result = mysqli_query($conn, $check_book);

        if (mysqli_num_rows($book_result) > 0) {
            // Book exists, proceed with adding to cart
            $sql = "INSERT INTO `cart` (user_name, book_id) VALUES ('$username', '$bookid')";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                header("Location: addtocart.php");
                exit(); // Always exit after header redirect
            } else {
                echo "Error inserting into cart: " . mysqli_error($conn);
            }
        } else {
            echo "Error: Book does not exist in database";
        }
    } else {
        header("Location: login.html");
        // echo "User not logged in, First login with your account !";
    }
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>

