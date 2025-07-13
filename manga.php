
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png">
  <style>
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

    img {

      object-fit: cover;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">



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

<body class="services-page">
    <?php include 'includes/header.php'; ?>



  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Manga Books</h1>
        <p class="lead">Discover Japanese comics and graphic novels at BookReBoot</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Manga</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section class="container">
      <div class="bg-light py-3 mb-3">
        <div class="container">
          <h2 class="text-center mb-4 text-center">What is Manga?</h2>
          <p class="lead text-center mb-5">Manga are comics or graphic novels originating from Japan, characterized by
            their unique artistic style and storytelling techniques.</p>

          <div class="row">
            <h3 class="my-4 text-center">Popular Manga Types</h3>
            <div class="col-md-6">
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Shōnen (少年)</h4>
                <p>Action-packed series aimed at young male readers, featuring themes of friendship, perseverance, and
                  growth.</p>
              </div>
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Shōjo (少女)</h4>
                <p>Stories focused on romance and relationships, primarily targeting young female readers.</p>
              </div>
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Seinen (青年)</h4>
                <p>Mature themes and complex narratives for adult male readers.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Josei (女性)</h4>
                <p>Realistic romance and slice-of-life stories for <br>adult female readers.</p>
              </div>
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Isekai (異世界)</h4>
                <p>Stories about characters transported to fantasy <br>worlds.</p>
              </div>
              <div class="border-start border-primary border-4 ps-3 mb-4">
                <h4>Slice of Life (日常系)</h4>
                <p>Focuses on everyday experiences and character relationships.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="container my-3">
        <div class="container-fluid">
          <div class="row">
            <h2 class="mb-5 text-center">Fiction Books Available in BookReBoot</h2>
            <div class="col-lg-2 col-md-12" style="background-color: #f8f9fa;">
              <div class="container my-5">
                <div class="row">
                  <!-- Sidebar Filters -->
                  <div class="col-lg-12 mb-4">
                    <div class="category-filter">
                      <h4 class="mb-3">Filter By</h4>

                      <!-- Categories -->
                      <div class="mb-4">
                        <h5>category</h5>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="fiction">
                          <label class="form-check-label" for="fiction">Shōnen </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="nonfiction">
                          <label class="form-check-label" for="nonfiction">Shōjo </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="mystery">
                          <label class="form-check-label" for="mystery">Seinen </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="mystery">
                          <label class="form-check-label" for="mystery">Josei </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="mystery">
                          <label class="form-check-label" for="mystery">Isekai </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="mystery">
                          <label class="form-check-label" for="mystery">Slice of Life</label>
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
                <?php include('show_manga.php'); ?>
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