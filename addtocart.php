<?php
include 'db.php'; // database connection

// Handle delete request
if (isset($_POST['delete_cart_id'])) {
    $cart_id = intval($_POST['delete_cart_id']);
    $delete_sql = "DELETE FROM cart WHERE cart_id = $cart_id";
    mysqli_query($conn, $delete_sql);
}

// Fetch cart items with book details
$sql = "SELECT cart.cart_id, cart.book_id, books.title, books.author, books.price, books.cover_page_path, books.quantity
        FROM cart
        INNER JOIN books ON cart.book_id = books.book_id";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
            .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            width: 250px;
            display: inline-block;
            text-align: center;
            vertical-align: top;
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            padding: 6px 10px;
            margin-top: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }
        .delete-btn {
            background-color: #ff4d4d;
            color: white;
        }
        .buy-btn {
            background-color: #28a745;
            color: white;
        }
        .buy-form input[type="number"] {
            width: 60px;
            margin: 5px 0;
        }
    .book-card {
      transition: transform 0.3s;
      height: 100%;
    }

    .book-card:hover {
      transform: translateY(-10px);
    }

    .rating {
      color: #ffc107;
    }

    .bestseller-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: #dc3545;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 0.8rem;
    }

    .category-filter {
      overflow-x: auto;
      white-space: nowrap;
      padding: 10px 0;
    }

    .price-tag {
      font-size: 1.25rem;
      font-weight: bold;
      color: #28a745;
    }

    .original-price {
      text-decoration: line-through;
      color: #6c757d;
      font-size: 0.9rem;
    }

    .btn-group-vertical {
      width: 100%;
    }

    .btn-buy-now {
      background-color: white;
      border-color: #28a745;
      color: greenyellow;
    }

    .btn-buy-now:hover {
      background-color: white;
      border-color: #1e7e34;
      color: greenyellow;
    }

    .card:hover {
  transform: translateY(-5px);
  transition: transform 0.3s ease;
}
.card-title {
  font-size: 18px;
  font-weight: 600;
}

  </style>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body class="addtocart-page">

  <?php include 'includes/header.php'; ?>


  

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Add To Cart</h1>
        <p>The Books Which Is In The Cart</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Add To Cart</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

 <main class="main">

 

  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Your Cart</h2>

      <div class="row justify-content-center">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 col-sm-6 mb-4">';
                echo '<div class="card shadow-sm h-100 border-0">';
                echo '<div class="card-body d-flex flex-column">';
                echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                echo '<p class="card-text mb-1"><strong>Author:</strong> ' . htmlspecialchars($row['author']) . '</p>';
                echo '<p class="card-text text-success fw-bold mb-2">₹' . htmlspecialchars($row['price']) . '</p>';

                echo '<form action="payment.php" method="post" class="mb-2">';
                echo '<input type="hidden" name="book_id" value="' . $row['book_id'] . '">';
                echo '<div class="input-group mb-2">';
                echo '<input type="number" name="qty" min="1" max="' . $row['quantity'] . '" value="1" class="form-control" required>';
                echo '<button type="submit" class="btn btn-success">Buy Now</button>';
                echo '</div>';
                echo '</form>';

                echo '<form method="post">';
                echo '<input type="hidden" name="delete_cart_id" value="' . $row['cart_id'] . '">';
                echo '<button type="submit" class="btn btn-danger w-100">Remove</button>';
                echo '</form>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p class='text-center'>Your cart is empty.</p>";
        }
        ?>
      </div>
    </div>
  </section>
</main>




<?php include 'includes/footer.php'; ?>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>