<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


</head>

<body class="body-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Liputan Grant</a>

            <!-- Regular Navbar for larger screens -->
            <x-navbar></x-navbar>

            <div class="container mt-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>

            <div class="container mt-4">
                <div class="headline-container">
                    <div class="headline-text">BREAKING NEWS</div>
                    <div class="moving-banner">Latest updates: Important news headlines moving across the screen..</div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <!-- Main News -->
                        @if ($majorBreakingStory)
                            <a href="{{ route('news.show', $majorBreakingStory->id) }}"
                                style="text-decoration: none; color: inherit;">
                                <div class="news-card">
                                    <img src="{{ asset($majorBreakingStory->image) }}" alt="Main news"
                                        class="img-fluid news-image">
                                    <div class="news-content">
                                        <h2 class="news-title">{{ $majorBreakingStory->title }}</h2>
                                        <p>{{ $majorBreakingStory->content }}</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                        <div class="caros">
                            <div class="carousel slide" id="newsCarousel">
                                <a href="news.html" style="text-decoration: none; color: inherit;">
                                    <div class="carousel-inner z-index-0">
                                        <div class="carousel-item active">
                                            <h3>Latest Updates</h3>
                                            <p>Breaking news and important updates throughout the day..</p>
                                        </div>
                                        <div class="carousel-item">
                                            <h3>Featured Story</h3>
                                            <p>In-depth coverage of major events and developments..</p>
                                        </div>
                                    </div>
                                </a>
                                <button class="carousel-control-prev z-index-1" type="button"
                                    data-bs-target="#newsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next z-index-1" type="button"
                                    data-bs-target="#newsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            @if ($technologyBusinessNews->count() > 0)
                                @foreach ($technologyBusinessNews as $technews)
                                    <div class="col-md-6">
                                        <a href="{{ route('news.show', $technews->id) }}"
                                            style="text-decoration: none; color: inherit;">
                                            <div class="news-card">
                                                <img src="{{ asset($technews->image) }}" alt="News"
                                                    class="img-fluid news-image">
                                                <div class="news-content">
                                                    <h3 class="news-title">{{ $technews->title }}</h3>
                                                    <p>{{ $technews->content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!--sub main-->
                        @if ($subMainNews->count() > 0)
                            @foreach ($subMainNews as $subnews)
                                <a href="{{ route('news.show', $subnews->id) }}" style="text-decoration: none; color: inherit;">
                                    <div class="news-card-sub">
                                        <img src="{{ asset($subnews->image) }}" alt="Main news" class="img-fluid news-image-sub">
                                        <div class="news-content">
                                            <h2 class="news-title">{{ $subnews->title }}</h2>
                                            <p>{{ $subnews ->content }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif

                    </div>

                    <div class="col-lg-4">
                        <div class="side-bar-news mt-1">
                            <h4 class="mb-4">Trending</h4>
                            <div class="row">
                                @if ($trendingNews -> count()>0)
                                @foreach ($trendingNews as $trendnews)
                                <a href="{{ route('news.show',$trendnews->id) }}" style="text-decoration: none; color: inherit;" class="d-flex trend">
                                    <div class="hastag col-md-2">
                                        <h5>#</h5>
                                    </div>
                                    <div class="popular-item col-md-10">
                                        <h5>{{ $trendnews->title }}</h5>
                                    </div>
                                </a>
                                    
                                @endforeach
                 
                                @endif
               
                            </div>
                        </div>

                        <div class="popular-news mt-1">
                            <h4 class="mb-4">Popular Now</h4>
                            <a href="news.html" style="text-decoration: none; color: inherit;">
                                <div class="popular-item">
                                    <h5>Popular Story 1</h5>
                                    <p class="mb-0">Brief description of the trending story..</p>
                                </div>
                            </a>
                            <a href="news.html" style="text-decoration: none; color: inherit;" class="d-flex">
                                <div class="popular-item">
                                    <h5>Popular Story 2</h5>
                                    <p class="mb-0">Another trending story with key details..</p>
                                </div>
                            </a>
                            <a href="news.html" style="text-decoration: none; color: inherit;" class="d-flex">
                                <div class="popular-item">
                                    <h5>Popular Story 3</h5>
                                    <p class="mb-0">More trending content for readers..</p>
                                </div>
                            </a>
                        </div>

                        <div class="popular-news mt-1">
                            <h4 class="mb-4">Hot Topic</h4>
                            <a href="news.html" style="text-decoration: none; color: inherit;">
                                <div class="popular-item-sidebar">
                                    <img src="./img/news-img7.jpg" alt="Main news"
                                        class="img-fluid news-image-sidebar">
                                    <h5>Hot Topic Title 1</h5>
                                </div>
                            </a>
                            <a href="news.html" style="text-decoration: none; color: inherit;">
                                <div class="popular-item-sidebar">
                                    <img src="./img/news-img6.jpg" alt="Main news"
                                        class="img-fluid news-image-sidebar">
                                    <h5>Hot Topic Title 2</h5>
                                </div>
                            </a>
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
                            <p>Trusted news portal that provides actual and up-to-date information from various news
                                categories.</p>
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
                                <input type="email" class="form-control" placeholder="Your Email"
                                    aria-label="Your Email">
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
<script src="js/script.js"></script>


</html>
