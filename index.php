<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chandana Groups</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #2a2abf, #4b3ad1);
    }

    /* Desktop navbar fixed */
    @media (min-width: 992px) {
      body {
        padding-top: 90px;
      }

      .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1030;
      }
    }

    /* Tablet & Mobile */
    @media (max-width: 991px) {
      .navbar {
        position: relative;
      }

      body {
        padding-top: 0;
      }

      .navbar-collapse {
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 15px;
        margin-top: 15px;
      }

      .navbar-nav .btn {
        width: 100%;
      }
    }

    .hero-section {
      min-height: 100vh;
    }

    .signup-card {
      border-radius: 25px;
    }
  </style>
</head>

<body>

<!-- ✅ SUCCESS / ERROR MESSAGES -->
<div class="container mt-3">
<?php
if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success text-center'>" . $_SESSION['success'] . "</div>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger text-center'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
}
?>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="#">
      Chandana Groups
    </a>

    <button class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center gap-lg-4 text-center mt-3 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Feedback</a>
        </li>
        <li class="nav-item mt-3 mt-lg-0">
          <a class="btn btn-danger rounded-pill px-4" href="#">
            Purchase
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SECTION -->
<section class="hero-section d-flex align-items-center text-white">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT -->
      <div class="col-lg-6 text-center text-lg-start mb-4">
        <h1 class="fw-bold display-4 mb-4">
          Generate Awesome <br> Web Pages
        </h1>

        <p class="lead mb-4">
          The most important part of the Startup is the samples.
          The samples form a set of 25 usable pages you can use as is
          or you can add new blocks.
        </p>

        <a href="#" class="btn btn-danger btn-lg rounded-pill px-5">
          Learn More
        </a>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow-lg p-4 p-md-5 signup-card">

          <h3 class="text-center mb-4">Sign Up Now</h3>

          <form method="POST" action="register.php">

            <div class="mb-4">
              <input type="email"
                     name="email"
                     class="form-control form-control-lg rounded-pill"
                     placeholder="Your Email"
                     required>
            </div>

            <div class="mb-4">
              <input type="password"
                     name="password"
                     class="form-control form-control-lg rounded-pill"
                     placeholder="Your Password"
                     required>
            </div>

            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" required>
              <label class="form-check-label">
                I agree to the terms of services
              </label>
            </div>

            <div class="d-grid gap-3">
              <button type="submit"
                      name="submit"
                      class="btn btn-primary btn-lg rounded-pill">
                Sign Up
              </button>

              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1">
                <span class="px-3 text-muted">or</span>
                <hr class="flex-grow-1">
              </div>

              <button type="button"
                      class="btn btn-outline-primary btn-lg rounded-pill">
                Login via Google
              </button>
            </div>

            <p class="text-center mt-4">
              Already have an Account?
              <a href="#" class="text-success">Sign In</a>
            </p>

          </form>

        </div>
      </div>

    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>