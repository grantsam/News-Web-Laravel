<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>

<body class="body-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="news.html">Liputan Grant</a>

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
                    <a class="nav-link active" href="news.html">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="foto-video.html">FOTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sitemap.html">SITEMAP</a>
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

    <div class="container mt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
            </ol>
        </nav>
    </div>

    <!--body-->
    <div class="container mt-4">
        <div class="row">
            <div class="container-main col-lg-8">
                <!-- Main News -->
                <section>

                    <div class="news-card">
                        <h1>{{ $post->title }}</h1>
                        <p>
                            {{ $post->content }}
                        </p>
                        <div class="news-card col-md-12"
                            style="display: flex; justify-content: center; align-items: center;">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid news-image">
                            @elseif ($photo)
                                <img src="{{ $photo['urls']['regular'] }}" alt="{{ $photo['alt_description'] }}"
                                    class="img-fluid news-image">
                            @else
                                <img src="https://source.unsplash.com/1200x400?{{ optional($post->category)->name ?? 'news' }}"
                                    alt="{{ $post->title }}" class="img-fluid news-image">
                            @endif
                        </div>
                    </div>

                </section>

                <!-- More News -->
                <article>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="colomn-more d-flex gap-2 mx-1">
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img7.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 1</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img8.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 2</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img6.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 3</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img4.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 4</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="colomn-more d-flex gap-2 mx-1">
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img3.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 5</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img2.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 6</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img1.png" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 7</h5>
                                    </div>
                                </a>
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-more">
                                        <img src="/img/news-img5.jpg" alt="news more"
                                            class="img-thumbnail news-image-more">
                                        <h5 style="text-align: center;">Title 8</h5>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </article>
            </div>

            <!-- Side Bar -->

            <aside class="container-side col-lg-4">
                <!-- trending -->
                <div class="side-bar-news mt-1">
                    <h4 class="mb-4">Trending</h4>
                    <div class="row">
                        <a href="news.html" style="text-decoration: none; color: inherit;"
                            class="side-bar-item d-flex">
                            <div class="hastag col-md-2">
                                <h5>#</h5>
                            </div>
                            <div class="popular-item col-md-10">
                                <h5>Trending Story 1</h5>
                            </div>
                        </a>
                        <a href="news.html" style="text-decoration: none; color: inherit;"
                            class="side-bar-item d-flex">
                            <div class="hastag col-md-2">
                                <h5>#</h5>
                            </div>
                            <div class="popular-item col-md-10">
                                <h5>Trending Story 2</h5>
                            </div>
                        </a>
                        <a href="news.html" style="text-decoration: none; color: inherit;"
                            class="side-bar-item d-flex">
                            <div class="hastag col-md-2">
                                <h5>#</h5>
                            </div>
                            <div class="popular-item col-md-10">
                                <h5>Trending Story 3</h5>
                            </div>
                        </a>
                        <a href="news.html" style="text-decoration: none; color: inherit;"
                            class="side-bar-item d-flex">
                            <div class="hastag col-md-2">
                                <h5>#</h5>
                            </div>
                            <div class="popular-item col-md-10">
                                <h5>Trending Story 4</h5>
                            </div>
                        </a>
                        <a href="news.html" style="text-decoration: none; color: inherit;"
                            class="side-bar-item d-flex">
                            <div class="hastag col-md-2">
                                <h5>#</h5>
                            </div>
                            <div class="popular-item col-md-10">
                                <h5>Trending Story 5</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Popular Now -->
                <div class="popular-news mt-1">
                    <h4 class="mb-4">Popular Now</h4>
                    <a href="news.html" style="text-decoration: none; color: inherit;" class="side-bar-item d-flex">
                        <div class="popular-item">
                            <h5>Popular Story 1</h5>
                            <p class="mb-0">Brief description of the trending story...</p>
                        </div>
                    </a>
                    <a href="news.html" style="text-decoration: none; color: inherit;" class="side-bar-item d-flex">
                        <div class="popular-item">
                            <h5>Popular Story 2</h5>
                            <p class="mb-0">Another trending story with key details...</p>
                        </div>
                    </a>
                    <a href="news.html" style="text-decoration: none; color: inherit;" class="side-bar-item d-flex">
                        <div class="popular-item">
                            <h5>Popular Story 3</h5>
                            <p class="mb-0">More trending content for readers...</p>
                        </div>
                    </a>
                </div>

                <div class="popular-news mt-1">
                    <h4 class="mb-4">Hot Topic</h4>
                    <a href="news.html" style="text-decoration: none; color: inherit;">
                        <div class="popular-item-sidebar">
                            <img src="/img/news-img6.jpg" alt="Main news" class="img-fluid news-image-sidebar">
                            <h5>Hot Topic Title 1</h5>
                        </div>
                    </a>
                    <a href="news.html" style="text-decoration: none; color: inherit;">
                        <div class="popular-item-sidebar">
                            <img src="/img/news-img3.jpg" alt="Main news" class="img-fluid news-image-sidebar">
                            <h5>Hot Topic Title 2</h5>
                        </div>
                    </a>
                    <a href="news.html" style="text-decoration: none; color: inherit;">
                        <div class="popular-item-sidebar">
                            <img src="/img/news-img5.jpg" alt="Main news" class="img-fluid news-image-sidebar">
                            <h5>Hot Topic Title 3</h5>
                        </div>
                    </a>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="{{ asset('js/news.js') }}"></script>


</html>
