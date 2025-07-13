
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

  <?php include 'includes/header.php'; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Best Seller</h1>
        <p>Discover our Most Popular Books</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Bestseller</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- main content -->
    <section class="container bg-light">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="container my-5">
            <div class="row">
              <!-- Sidebar Filters -->
              <div class="col-lg-12 mb-4">
                <div class="category-filter">
                  <h4 class="mb-3">Filter By</h4>

                  <!-- Categories -->
                  <div class="mb-4">
                    <h5>Categories</h5>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="fiction">
                      <label class="form-check-label" for="fiction">Fiction</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="nonfiction">
                      <label class="form-check-label" for="nonfiction">Non-Fiction</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Children</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">comics</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Manga</label>
                    </div>
                  </div>

                  <!-- Price Range -->
                  <div class="mb-4">
                    <h5>Price Range</h5>
                    <input type="range" class="form-range" min="0" max="100" id="priceRange">
                    <div class="d-flex justify-content-between">
                      <span>₹100</span>
                      <span>₹1000</span>
                    </div>
                  </div>

                  <!-- Rating -->
                  <div class="mb-4">
                    <h5>Rating</h5>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rating" id="rating5">
                      <label class="form-check-label" for="rating5">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rating" id="rating4">
                      <label class="form-check-label" for="rating4">
                        4+ Stars
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-12">
          <section class="py-3 bg-light">
            <div class="container">
              <div class="category-filter">
                <button class="btn btn-primary me-2 active">All</button>
                <button class="btn btn-outline-primary me-2">Fiction</button>
                <button class="btn btn-outline-primary me-2">Non-Fiction</button>
                <button class="btn btn-outline-primary me-2">Childrem</button>
                <button class="btn btn-outline-primary me-2">comics</button>
                <button class="btn btn-outline-primary me-2">manga</button>
              </div>
            </div>
          </section>
          <section class="py-5">
          <div class="col-md-12">
            <div class="row">
              <?php include('show_book_bestseller.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    </div>
    </section>

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