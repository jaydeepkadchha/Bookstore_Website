<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Admin Dashboard - BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png" />

  <!-- Bootstrap and Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f4f6f9;
    }

    .sidebar {
      height: 100vh;
      background-color: #001f3f;
      color: white;
      padding: 20px;
    }

    .sidebar h4 {
      margin-bottom: 2rem;
      font-weight: bold;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 10px 0;
      text-decoration: none;
      font-size: 1rem;
    }

    .sidebar a:hover {
      background-color: #003366;
      padding-left: 10px;
      transition: 0.3s;
      border-radius: 5px;
    }

    .dashboard-header {
      padding: 20px 0;
      background: linear-gradient(90deg, #001f3f, #003366);
      color: white;
      text-align: center;
    }

    .overview-box {
      padding: 30px;
      border-radius: 15px;
      text-align: center;
      background: white;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
      transition: 0.3s;
    }

    .overview-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .overview-icon {
      font-size: 2.5rem;
      color: #001f3f;
      margin-bottom: 15px;
    }

    a.text-decoration-none h5 {
      color: #001f3f;
      margin-top: 10px;
    }

    a.text-decoration-none:hover h5 {
      text-decoration: underline;
    }

    .footer {
      padding: 20px;
      text-align: center;
      background-color: #f1f1f1;
      color: #666;
      font-size: 14px;
    }

    .charts-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }

    .chart-box {
      background: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
      width: 450px;
      height: 420px;
    }

    canvas {
      width: 100% !important;
      height: 100% !important;
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }

      .chart-box {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h4>📚 BookReBoot Admin</h4>
        <a href="admin_index.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        <a href="manage_books.php"><i class="bi bi-book me-2"></i>Manage Books</a>
        <a href="manage_categories.php"><i class="bi bi-tags me-2"></i>Manage Categories</a>
        <a href="manage_users.php"><i class="bi bi-people me-2"></i>Manage Users</a>
        <a href="manage_cart.php"><i class="bi bi-cart3 me-2"></i>Manage Cart</a>
        <a href="manage_orders.php"><i class="bi bi-receipt me-2"></i>Orders & Sales</a>
        <a href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
      </div>

      <!-- Main content -->
      <div class="col-md-10">
        <div class="dashboard-header">
          <h2>Welcome to Admin Dashboard</h2>
          <p>Manage all sections of BookReBoot from here</p>
        </div>

        <div class="container mt-4">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="overview-box">
                <i class="bi bi-book overview-icon"></i>
                <a href="manage_books.php" class="text-decoration-none">
                  <h5>Manage Books</h5>
                  <p>Add, update, or delete book listings.</p>
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="overview-box">
                <i class="bi bi-tags overview-icon"></i>
                <a href="manage_categories.php" class="text-decoration-none">
                  <h5>Manage Categories</h5>
                  <p>Organize books by category.</p>
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="overview-box">
                <i class="bi bi-people overview-icon"></i>
                <a href="manage_users.php" class="text-decoration-none">
                  <h5>Manage Users</h5>
                  <p>View, edit, or remove user accounts.</p>
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="overview-box">
                <i class="bi bi-cart3 overview-icon"></i>
                <a href="manage_cart.php" class="text-decoration-none">
                  <h5>Manage Cart</h5>
                  <p>View and manage shopping carts.</p>
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="overview-box">
                <i class="bi bi-receipt overview-icon"></i>
                <a href="manage_orders.php" class="text-decoration-none">
                  <h5>Orders & Sales</h5>
                  <p>Track purchases and transactions.</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Charts -->
          <div class="charts-container">
            <div class="chart-box">
              <h5 class="text-center">Books by Category</h5>
              <canvas id="categoryChart"></canvas>
            </div>
            <div class="chart-box">
              <h5 class="text-center">Sales by Payment Method</h5>
              <canvas id="paymentChart"></canvas>
            </div>
          </div>
        </div>

        <div class="footer mt-5">
          &copy; <?php echo date("Y"); ?> BookReBoot Admin Panel. All rights reserved.
        </div>
      </div>
    </div>
  </div>

  <!-- JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
      type: 'bar',
      data: {
        labels: ['Fiction', 'Non-Fiction', 'Children', 'Comics', 'Manga'],
        datasets: [{
          label: 'Books',
          data: [30, 20, 15, 10, 25],
          backgroundColor: '#1e4356'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    const paymentCtx = document.getElementById('paymentChart').getContext('2d');
    new Chart(paymentCtx, {
      type: 'pie',
      data: {
        labels: ['COD', 'Card', 'UPI'],
        datasets: [{
          label: 'Payments',
          data: [50, 30, 20],
          backgroundColor: ['#003366', '#1e4356', '#4CAF50']
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'bottom' }
        }
      }
    });
  </script>
</body>

</html>
