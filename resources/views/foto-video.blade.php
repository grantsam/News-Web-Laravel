<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/foto-video.css">

</head>

<body class="body-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="foto-video.html">Liputan Grant</a>

            <!-- Regular Navbar for larger screens -->
            <x-navbar></x-navbar>

    <div class="container mt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Foto</li>
            </ol>
        </nav>
    </div>

    <!-- Main Container -->
    <div class="container mt-5">
        <div class="row h-100">
            <!-- Left side: Large image -->
            <div class="col-lg-8  mb-4 d-flex">
                <div class="news-card flex-fill">
                    <img src="./img/news-img8.jpg" alt="Main news" class="img-fluid news-image">
                    <div class="news-content">
                        <h2 class="news-title">Main Trending Topic</h2>
                    </div>
                </div>
            </div>

            <!-- Right side: Smaller images -->
            <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-between">
                <!-- First small image -->
                <div class="news-card mb-3 flex-grow-1">
                    <img src="./img/news-img7.jpg" alt="First small news" class="img-fluid news-image">
                    <div class="news-content">
                        <h4 class="news-title">Sub Trending Topic 1</h4>
                    </div>
                </div>

                <!-- Second small image -->
                <div class="news-card mb-3 flex-grow-1">
                    <img src="./img/news-img6.jpg" alt="Second small news" class="img-fluid news-image">
                    <div class="news-content">
                        <h4 class="news-title">Sub Trending Topic 2</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <h1>Popular</h1>
        <div class="container-more col-md-12 d-flex justify-content-between">
            <div class="news-card m-1">
                <img src="./img/news-img5.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Popular Topic 1</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img4.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Popular Topic 2</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img2.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Popular Topic 3</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img8.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Popular Topic 4</h4>
                </div>
            </div>
        </div>
        <h1>Recently</h1>
        <div class="container-more col-md-12 d-flex justify-content-between">
            <div class="news-card m-1">
                <img src="./img/news-img3.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Recently Topic 1</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img6.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Recently Topic 2</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img8.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Recently Topic 3</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img7.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Recently Topic 4</h4>
                </div>
            </div>
        </div>
        <h1>Hot</h1>
        <div class="container-more col-md-12 d-flex justify-content-between">
            <div class="news-card m-1">
                <img src="./img/news-img2.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Hot Topic 1</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img3.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Hot Topic 2</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img5.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Hot Topic 3</h4>
                </div>
            </div>
            <div class="news-card m-1">
                <img src="./img/news-img4.jpg" alt="First small news" class="img-fluid news-image-more">
                <div class="news-content">
                    <h4 class="news-title">Hot Topic 4</h4>
                </div>
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
<script src="js/foto-video.js"></script>

</html>