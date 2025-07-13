<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>BookReBook</title>
  <link rel="icon" href="assets/img/logo5.png">

  <style>
    <script>
  const book = <?= $jsonData ?>;
  console.log("Book Title:", book.title);
</script>

    body.dark {
      background-color:#1e4356;;
  
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

    .feature-icon {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background-color: #e9ecef;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
    }

    .images {
      height: auto;
      width: 100%;
    }

    
    .scroll-container {
            width: 100%;
            overflow: hidden;
            background: #333;
            padding: 10px 0;
            height: 40px;
            background-color: #1e4356;
        }
        .scroll-container marquee {
            font-size: 17px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.3);
        }
    /* scroll bar css */

  </style>
  <!-- Favicons -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/logo5.png">


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

<body class="index-page">



  <?php include 'includes/header.php'; ?>

<main class="main">
     
    <section id="hero" class="hero section dark-background">
      

      <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h1 class="display-4">Welcome to BookReBoot</h1>
              <p class="lead">Your one-stop destination for all your reading needs</p>
              <a href="bestseller.php" class="btn btn-primary btn-lg">Shop Now</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h1 class="display-4">New Arrivals</h1>
              <p class="lead">Discover the latest bestsellers and trending books</p>
              <a href="#new-arrivals" class="btn btn-primary btn-lg">View New Arrivals</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h1 class="display-4">Special Offers</h1>
              <p class="lead">Up to 50% off on selected titles</p>
              <a href="#offers" class="btn btn-primary btn-lg">View Offers</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </div>
      

    </section><!-- /Hero Section -->
    <!-- change text -->
    <div class="container">
      <!-- change text END -->

      <!-- Featured Services Section -->
      <section class="container ">
        <div class="row g-4">
          <div class="col-md-3">
            <div class="text-center">
              <div class="feature-icon mx-auto">
                <i class="fas fa-truck text-primary fa-2x"></i>
              </div>
              <h3 class="h5">Free Shipping</h3>
              <p class="text-muted">On orders over ₹500</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="text-center">
              <div class="feature-icon mx-auto">
                <i class="fas fa-undo text-primary fa-2x"></i>
              </div>
              <h3 class="h5">Easy Returns</h3>
              <p class="text-muted">30-day return policy</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="text-center">
              <div class="feature-icon mx-auto">
                <i class="fas fa-lock text-primary fa-2x"></i>
              </div>
              <h3 class="h5">Secure Payment</h3>
              <p class="text-muted">100% secure checkout</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="text-center">
              <div class="feature-icon mx-auto">
                <i class="fas fa-headset text-primary fa-2x"></i>
              </div>
              <h3 class="h5">24/7 Support</h3>
              <p class="text-muted">Always here to help</p>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
<!-- 
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="row">
               <?php include('show_book_home.php'); ?> 
            </div>
          </div>
        </div>
      </div> -->
    <!-- Categories Section -->
    <section class="container my-5" id="categories">
      <h2 class="text-center mb-5">Popular Categories</h2>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-magic fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">Fantasy</h3>
                <p class="text-muted mb-0">500+ Books</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-heart fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">Romance</h3>
                <p class="text-muted mb-0">200+ Books</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-microscope fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">Fiction</h3>
                <p class="text-muted mb-0">400+ Books</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-book fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">Non-Fiction</h3>
                <p class="text-muted mb-0">800+ Books</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-ghost fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">comics</h3>
                <p class="text-muted mb-0">300+ Books</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card category-card">
            <div class="card-body d-flex align-items-center">
              <i class="fas fa-graduation-cap fa-2x text-primary me-3"></i>
              <div>
                <h3 class="h5 mb-1">Academic</h3>
                <p class="text-muted mb-0">450+ Books</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container my-5">
      <h2 class="text-center mb-5">Meet Our Leadership Team</h2>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a1.jpg" class="card-img-top" alt="CEO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Jaydeep Kadchha</h3>
              <p class="text-muted">Founder & CEO</p>
              <p class="card-text">Visionary leader with 15+ years in digital retail and publishing.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a2.jpg" class="card-img-top" alt="CTO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Arjun Kadchha</h3>
              <p class="text-muted">Chief Technology Officer</p>
              <p class="card-text">Tech innovator specializing in e-commerce platforms.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a3.jpg" class="card-img-top" alt="COO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Hardik Pankhaniya</h3>
              <p class="text-muted">Chief Operating Officer</p>
              <p class="card-text">Operations expert with focus on customer satisfaction.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a4.jpg" class="card-img-top" alt="CMO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Meet Joshi</h3>
              <p class="text-muted">Chief Marketing Officer</p>
              <p class="card-text">Digital marketing strategist and brand builder.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a5.jpg" class="card-img-top" alt="CMO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4"> Ranjit Kadchha</h3>
              <p class="text-muted">Ceo &amp; Founder</p>
              <p class="card-text">This man is sub ceo who helped and manage all basic needs of company.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a6.jpg" class="card-img-top" alt="CMO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Jay Kadavala</h3>
              <p class="text-muted">Store owner</p>
              <p class="card-text">the man who manage the whole store and owner of the store.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a7.jpg" class="card-img-top" alt="CEO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Meet Solanki</h3>
              <p class="text-muted">Freelancer</p>
              <p class="card-text">freelancer who helped the owner about freelancing.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow custom-card">
            <img src="assets/img/team/a8.jpg" class="card-img-top" alt="CEO" height="300" weight="60">
            <div class="card-body text-center">
              <h3 class="card-title h4">Rushi Rajyguru</h3>
              <p class="text-muted">Entrepreneur</p>
              <p class="card-text">Entrepreneur who helped the owner about Entrepreneur.</p>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </main>
      


  <?php include 'includes/footer.php'; ?>


  <!-- <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">BookByte</span>
          </a>
          <div class="footer-contact pt-3">
            <p>15 Park Street, Apeejay House, Block C</p>
            <p>2nd Floor, Kolkata 700016, India</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(+91) 7304576378</span></p>
            <p><strong>Email:</strong> <span>customercare@bookbyteonline.com</span></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <h4>Designed By</h4>
          <p>Kadchha Jaydeep Maldebhai [236270307036]</p>
          

        </div>
        <div class="col-lg-3 col-md-12">
          <h4>Guided By</h4>
          <p>H. M. Padariya </p>
        </div>
        <div class="col-lg-3 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BookByte</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer> -->

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

  <!--sleep button-->
  <script>
    document.body.classList.add('light');
    document.getElementById('btn').addEventListener('click', () => {
      document.body.classList.toggle('light');
      document.body.classList.toggle('dark');
    })
  </script>

</body>

</html>