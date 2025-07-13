
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
  </style>

  <!-- Favicons -->
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

<body class="starter-page-page">
    <?php include 'includes/header.php'; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Comics Books</h1>
        <p class="lead">Your ultimate destination for comics, graphic novels, and manga!</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Comics Books</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section class="container">
      <div class="container mb-5">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center my-5">What Are Comic Books?</h2>
            <p class="lead">Comic books are a unique form of storytelling that combines visual art with narrative text.
              Through sequential panels of artwork and dialogue, comics create immersive stories that have captivated
              readers for generations.</p>

            <div class="mt-5">
              <h3 class="text-center">Types of Comics </h3>
              <div class="card-group mt-5">
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Superhero Comics</h4>
                    <p class="card-text">Action-packed adventures featuring iconic characters from Marvel, DC, and other
                      publishers. These stories often deal with themes of justice, power, and responsibility.</p>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Manga</h4>
                    <p class="card-text">Japanese comics with distinct artistic styles, covering genres from action and
                      romance to fantasy and slice-of-life stories. Read right-to-left in traditional Japanese style.
                    </p>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Graphic Novels</h4>
                    <p class="card-text">Long-form comics that tell complete stories, often tackling complex themes and
                      mature subjects. Perfect for readers seeking deeper narrative experiences.</p>
                  </div>
                </div>
              </div>
              <div class="card-group mt-3">
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Independent Comics</h4>
                    <p class="card-text">Unique stories from independent publishers and creators, offering fresh
                      perspectives and innovative storytelling approaches.</p>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Web Comics</h4>
                    <p class="card-text">Digital-first comics that originated online, now available in print
                      collections. Known for their diverse content and experimental formats.</p>
                  </div>
                </div>
                <div class="card border-0">
                  <div class="card-body">
                    <h4 class="card-title text-primary">European Comics</h4>
                    <p class="card-text">Also known as bandes dessinées, these comics offer unique art styles and
                      storytelling traditions from European creators.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-light py-5 mb-5">
        <div class="container">
          <h2 class="text-center mb-5">Featured Collections</h2>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card text-white bg-primary">
                <div class="card-body">
                  <h5 class="card-title">New Releases</h5>
                  <p class="card-text">Latest issues from your favorite series.</p><br>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card text-white bg-success">
                <div class="card-body">
                  <h5 class="card-title">Bestsellers</h5>
                  <p class="card-text">Most popular titles loved by our readers.</p><br>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card text-white bg-danger">
                <div class="card-body">
                  <h5 class="card-title">Classic Collections</h5>
                  <p class="card-text">Timeless stories that defined the medium.</p><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <h2 class="mb-5 text-center">Children Books Available in BookReBoot</h2>
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
                        <label class="form-check-label" for="fiction">Superhero Comics</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nonfiction">
                        <label class="form-check-label" for="nonfiction">Manga</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Graphic Novels</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Independent Comics</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Web Comics</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mystery">
                        <label class="form-check-label" for="mystery">Web Comics</label>
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
              <?php include('show_book_comics.php'); ?>
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