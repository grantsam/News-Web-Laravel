<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">

</head>

<body class="body-body">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="login.html">Liputan Grant</a>

      <!-- Regular Navbar for larger screens -->
      <x-navbar></x-navbar>
  </div>

  <!--body login-->
  <div class="container-login">
    <div class="login-card">
      <h2 class="login-title">LOGIN</h2>
      <form id="loginForm">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>

        <div class="forgot-password">
          <a href="#" id="forgotPasswordLink">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-primary login-btn">Login</button>

        <div class="register-link">
          Don't have an account? <a href="#" id="registerLink">Register here</a>
        </div>
      </form>
    </div>
  </div>




  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <!-- Tentang Kami -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>About Me</h5>
          <p>Trusted news portal that provides actual and up-to-date information from various news categories.
          </p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- Kategori -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Category</h5>
          <ul class="footer-links">
            <li><a href="#">Main</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Foto</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>

        <!-- Informasi -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Information</h5>
          <ul class="footer-links">
            <li><a href="#">Editorial</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertisement</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Berlangganan -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Subscribe</h5>
          <p>Get the latest news directly in your email</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
            <button class="btn btn-primary" type="button">send</button>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="row">
          <div class="col-12">
            <p class="text-center mb-0">
              &copy; 2024 Liputan Grant. Hak Cipta Dilindungi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/login.js"></script>

</html>