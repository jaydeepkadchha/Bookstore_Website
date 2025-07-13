<!DOCTYPE html>

<body lang="en">

  <head>

    <meta charset="utf-8">
    <link rel="icon" href="assets/img/logo5.png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="assets/img/logo5.png">

    <title>BookReBoot</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">


    <style>
      .header {
        background-color: #14e356;
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
    <link rel="icon" href="assets/img/logo5.png">

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
</body>
  <?php include 'includes/header.php'; ?>


<section class="main">

  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Non-Fiction Books</h1>
      <p class="lead">Discover knowledge, insights, and real-world stories</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Non-Fiction</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Service Details Section -->
  <section class="container">
    <!-- Introduction Section -->
    <div class="mb-2">
      <h2 class="mb-4 text-center mt-3">What are Non-Fiction Books?</h2>
      <p class="lead">Non-fiction books are based on facts and real events, offering readers authentic information,
        insights, and knowledge about various subjects. These books serve as valuable resources for learning, personal
        development, and understanding the world around us.</p>
      <div class="row mb-2">
        <div class="col-md-12">
          <h2 class="text-center mb-5">Types of Non-Fiction Books</h2>
          <ul>
            <li><strong>Biographies & Autobiographies:</strong> Life stories of individuals written by themselves or
              others.</li>
            <li><strong>Self-Help:</strong> Books that offer advice and strategies for personal improvement.</li>
            <li><strong>History:</strong> Books that document past events and their impact on the present.</li>
            <li><strong>Science & Technology:</strong> Books that explore scientific discoveries and technological
              advancements.</li>
            <li><strong>Travel:</strong> Books that describe travel experiences and destinations.</li>
            <li><strong>Business & Finance:</strong> Books that provide insights into the world of business and
              financial management.</li>
            <li><strong>Health & Fitness:</strong> Books that focus on physical and mental well-being.</li>
            <li><strong>Memoirs:</strong> Personal accounts of specific experiences or periods in the author's life.
            </li>
          </ul>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-4 mt-5">
          <div class="card h-100 bg-light">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-book-reader me-2"></i>Educational Value</h5>
              <p class="card-text">Learn from real experiences, research, and expert knowledge across various
                fields.Over recent years we have seen a noticeable rise in the inclusion of non-fiction in the
                curriculum as researchers globally recognise the increased value of these books as a gateway to
                learning.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card h-100 bg-light">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-brain me-2"></i>Personal Growth</h5>
              <p class="card-text">Develop new skills, gain insights, and expand your understanding of different
                subjects.The journey of personal development is a lifelong endeavour, and non-fiction books serve as
                invaluable guides along the way. As you start your reading, remember that each book is a stepping
                stone towards a more enlightened and empowered version of yourself.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-5">
          <div class="card h-100 bg-light">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-lightbulb me-2"></i>Practical Application</h5>
              <p class="card-text">Apply real-world knowledge and strategies to your personal and professional
                life.Practical Applications" as a category for books encompasses works that focus on the direct
                implementation of theories, concepts, and skills in real-world scenarios.The emphasis is on
                practicality and usability, ensuring that the content is not just theoretical but also accessible and
                relevant for immediate use.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="container-fluid">
      <div class="row">
        <h2 class="mb-5 text-center mt-1">NON-Fiction Books Available in BookReBoot</h2>
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
                      <label class="form-check-label" for="fiction">Biographies & Autobiographies</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="nonfiction">
                      <label class="form-check-label" for="nonfiction">Self-Help</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">History</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Science & Technology</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Business & Finance:</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Travel</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Health & Fitness</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mystery">
                      <label class="form-check-label" for="mystery">Memoirs</label>
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
            <?php include('show_book_nonfiction.php'); ?>
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