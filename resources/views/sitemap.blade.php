<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/sitemap.css">

</head>

<body class="body-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="sitemap.html">Liputan Grant</a>

            <!-- Regular Navbar for larger screens -->
            <x-navbar></x-navbar>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-end offcanvas-menu bg-dark text-white" tabindex="-1" id="sideMenu"
        aria-labelledby="sideMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="sideMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-top align-items-center">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="foto-video.html">FOTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="sitemap.html">SITEMAP</a>
                </li>
            </ul>
            <hr class="text-white-50">
            <form class="d-flex">
                <input class="form-control me-2 " type="search" placeholder="Search">
                <button class="btn btn-outline-light " type="submit">Search</button>
                <a class="btn btn-primary mx-2 " href="login.html">Login</a>
            </form>
        </div>
    </div>

    <div class="container mt-4">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="container-sitemap col-lg-6 m-3 pb-5" style="text-align: center;">
                <H2 href="#" style="cursor: pointer;" class="popular-item">Main</H2>
                <ul class="list-group">
                    <a href="news.html" class="popular-item">News</a>
                    <a href="login.html" class="popular-item">Login</a>
                    <a href="foto-video.html" class="popular-item">Foto</a>
                    <a href="sitemap.html" class="popular-item">Sitemap</a>
                </ul>
            </div>
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
<script src="js/sitemap.js"></script>

</html>