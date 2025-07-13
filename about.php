
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

  <style>
    .custom-card {
      transition: transform 0.3s;
    }

    .custom-card:hover {
      transform: translateY(-5px);
    }

    .stats-box {
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      background: #f8f9fa;
      transition: all 0.3s;
    }

    .stats-box:hover {
      background: #e9ecef;
    }

    .timeline {
      position: relative;
      padding: 20px 0;
    }

    .timeline-item {
      padding: 20px;
      border-left: 3px solid #0d6efd;
      position: relative;
      margin-bottom: 20px;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: -10px;
      top: 25px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #0d6efd;
    }
  </style>
</head>

<body class="about-page">
  <?php include 'includes/header.php'; ?>


    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section class="container my-5" id="learn-more">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100 shadow custom-card">
            <div class="card-body">
              <h2 class="card-title mb-4">
                <i class="fas fa-eye text-primary me-2"></i>Our Vision
              </h2>
              <p class="card-text">At BookReBoot, we envision a world where knowledge and stories are accessible to
                everyone, everywhere. We believe in the transformative power of reading and its ability to broaden
                horizons, spark creativity, and foster understanding across cultures.</p>
              <p class="card-text">Our platform serves as a bridge between readers and the vast world of literature,
                making book discovery and acquisition a seamless, enjoyable experience.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100 shadow custom-card">
            <div class="card-body">
              <h2 class="card-title mb-4">
                <i class="fas fa-bullseye text-primary me-2"></i>Our Mission
              </h2>
              <p class="card-text">We're on a mission to revolutionize the online book-buying experience by combining
                cutting-edge technology with personalized service. Our goal is to create an inclusive platform that
                caters to diverse reading preferences and promotes literary exploration.</p>
              <p class="card-text">Through innovative features and curated collections, we aim to make book discovery an
                exciting journey for readers of all ages and interests in books.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Stats Section -->
    <section class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Impact in Numbers</h2>
        <div class="row g-4">
          <div class="col-md-3">
            <div class="stats-box shadow-sm">
              <i class="fas fa-book fa-3x text-primary mb-3"></i>
              <h3 class="h2 mb-3">50,000+</h3>
              <p class="text-muted">Books Available</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-box shadow-sm">
              <i class="fas fa-users fa-3x text-primary mb-3"></i>
              <h3 class="h2 mb-3">100,000+</h3>
              <p class="text-muted">Happy Readers</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-box shadow-sm">
              <i class="fas fa-globe fa-3x text-primary mb-3"></i>
              <h3 class="h2 mb-3">50+</h3>
              <p class="text-muted">Countries Served</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats-box shadow-sm">
              <i class="fas fa-star fa-3x text-primary mb-3"></i>
              <h3 class="h2 mb-3">4.8/5</h3>
              <p class="text-muted">Customer Rating</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients Section -->
    <section class="container my-5">
      <h2 class="text-center mb-5">Our Journey</h2>
      <div class="timeline">
        <div class="timeline-item bg-white shadow-sm">
          <h3>2025 - The Beginning</h3>
          <p>BookReBoot launches with a vision to revolutionize online book shopping.</p>
        </div>
        <div class="timeline-item bg-white shadow-sm">
          <h3>2025 - Mobile App Launch</h3>
          <p>Introducing our mobile app for seamless book browsing and purchasing.</p>
        </div>
        <div class="timeline-item bg-white shadow-sm">
          <h3>2025 - Global Expansion</h3>
          <p>Expanding our services to reach readers worldwide.</p>
        </div>
        <div class="timeline-item bg-white shadow-sm">
          <h3>2025 - Community Building</h3>
          <p>Launch of BookByte Book Club and Reader Community features.</p>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Core Values</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow custom-card">
              <div class="card-body text-center">
                <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Customer First</h3>
                <p class="card-text">We prioritize our readers' needs and continuously improve based on their feedback.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow custom-card">
              <div class="card-body text-center">
                <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Innovation</h3>
                <p class="card-text">Constantly evolving our platform with cutting-edge technology and features.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow custom-card">
              <div class="card-body text-center">
                <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                <h3 class="card-title h4">Integrity</h3>
                <p class="card-text">Maintaining transparency and honesty in all our business practices.</p>
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
          <p>Keshvala Keval <br> Hiteshbhai[236270307040]</p>
          <p>Kotecha Jigar <br> Jayeshbhai[236270307047]</p>
          <p>Kadavala Jay<br> Rajeshbhai[236270307035]</p>
          <p>Lodhia Jay<br> Umeshbhai[236270307052]</p>

        </div>
        <div class="col-lg-3 col-md-12">
          <h4>Guided By</h4>
          <p>M. D. Gundaliya Sir</p>
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

</body>

</html>