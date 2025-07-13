
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .hero {
      background: url('https://source.unsplash.com/1600x400/?books') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 100px 0;
      text-align: center;
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

<body class="portfolio-page">
  <?php include 'includes/header.php'; ?>


    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Fiction Books</h1>
        <p class="lead">Dive into worlds of imagination and adventure</p>
        <p></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Fiction</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <div class="container mt-5">
      <h2 class="text-center">What is Fiction?</h2>
      <p>Fiction is a literary genre that involves the creation of stories that are not based on real events. It
        encompasses a wide range of narratives, characters, and themes, allowing readers to explore imaginary worlds and
        experiences. Fiction can be a powerful tool for understanding human emotions, societal issues, and the
        complexities of life.</p>
    </div>

    <!-- Types of Fiction Section -->
    <div class="container mt-5">
      <h2 class="text-center mt-5">Types of Fiction</h2>
      <ul class="mt-5">
        <li><strong>Literary Fiction:</strong> Focuses on character development and thematic depth.</li>
        <li><strong>Commercial Fiction:</strong> Aimed at a wide audience, often with a focus on plot and
          entertainment.
        </li>
        <li><strong>Historical Fiction:</strong> Set in a specific historical period, blending factual events with
          fictional characters.</li>
        <li><strong>Science Fiction:</strong> Explores futuristic concepts, advanced technology, and space
          exploration.
        </li>
        <li><strong>Fantasy:</strong> Involves magical elements, mythical creatures, and imaginary worlds.</li>
        <li><strong>Mystery:</strong> Centers around solving a crime or uncovering secrets.</li>
        <li><strong>Romance:</strong> Focuses on romantic relationships and emotional connections.</li>
        <li><strong>Thriller:</strong> Designed to evoke excitement and suspense, often involving crime or espionage.
        </li>
      </ul>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="card h-100 bg-light">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-star me-2"></i>Elements of Fiction</h5>
              <ul class="list-unstyled">
                <li>• Plot</li>
                <li>• Characters</li>
                <li>• Setting</li>
                <li>• Theme</li>
                <li>• Point of View</li>
                <li>• Style</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100 bg-light">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-magic me-2"></i>Benefits of Reading Fiction</h5>
              <ul class="list-unstyled">
                <li>• Enhanced Creativity</li>
                <li>• Improved Empathy</li>
                <li>• Better Language Skills</li>
                <li>• Stress Reduction</li>
                <li>• Cultural Understanding</li>
              </ul>
            </div>
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
                        <label class="form-check-label" for="fiction">Literary Fiction</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nonfiction">
                        <label class="form-check-label" for="nonfiction">Commercial Fiction</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Historical Fiction</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Science Fiction</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Fantasy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Mystery</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Romance</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Thriller</label>
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
          <!-- Book Cards -->
          <div class="col-md-10">
            <div class="row">
              <?php include('show_book_fiction.php'); ?>
            </div>
          </div>

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
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>