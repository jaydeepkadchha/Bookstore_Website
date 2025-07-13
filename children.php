
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/400');
      background-size: cover;
      color: white;
      padding: 4rem 0;
    }


    .card {
      transition: transform 0.3s;
      border-radius: 15px;
      overflow: hidden;

      .btn-buy {
        background-color: #FF6B6B;
        color: white
      }

      .btn-cart {
        background-color: #4ECDC4;
        color: white;
      }
    }

    .rating {
      color: #ffc107;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .age-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 5px 10px;
      border-radius: 15px;
      font-weight: bold;
    }
  </style>
  <!-- Favicons -->


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

<body class="team-page">
    <?php include 'includes/header.php'; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Children Books</h1>
        <p class="lead">Inspire young minds with magical stories and adventures</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section class="container">
      <div class="row">
        <div class="row mb-5">
          <div class="col-12 mt-3">
            <h2 class="text-center mb-4">Explore Our Children's Collection</h2>
            <p class="text-center">Discover a world of imagination with our carefully selected children's books. From
              picture books for toddlers to chapter books for young readers, we have stories that will captivate and
              educate young minds.</p>
          </div>
        </div>
    </section>
    <div class="container">
      <div class="row">
        <h2 class="mb-5 text-center">Children Books Available in BookReBoot</h2>
        <div class="col-lg-2 col-md-12" style="background-color: #f8f9fa;">
          <div class="container my-5">
            <div class="row">
              <!-- Sidebar Filters -->
              <section class="container">
                <div class="col-lg-12 mb-4">
                  <div class="category-filter">
                    <h4 class="mb-3">Filter By</h4>

                    <!-- Categories -->
                    <div class="mb-4">
                      <h5>category</h5>
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
                        <label class="form-check-label" for="mystery">comics</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Manga</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">History</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Fantacy</label>
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
        <div class="col-md-10">
          <div class="row">
            <?php include('show_book_children.php'); ?>
          </div>
        </div>
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
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>