<?php
use Illuminate\Support\Facades\Route;

function getRandomUnsplashImage($query = 'news')
{
    return 'https://source.unsplash.com/1200x400/?' . urlencode($query);
}
?>
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
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="headline-container">
            <div class="headline-text">NEWS</div>
            <div class="moving-banner">Latest updates: Important news headlines moving across the screen..</div>
        </div>


        @if (request('search'))
        <p>Hasil pencarian untuk: <strong>{{ request('search') }}</strong></p>
        @else
        <h2 class="mb-4 mt-4">Daftar Berita</h2>
        @endif
        <div class="row">
            @foreach ($posts as $news)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('news.post', $news->slug) }}" style="text-decoration: none; color: inherit;">
                        <div class="news-card">
                            @if (!empty($news->image))
                                <img src="{{ Str::startsWith($news->image, 'http') ? $news->image : asset('storage/' . $news->image) }}"
                                    class="img-fluid news-image" alt="{{ $news->title }}">
                            @else
                                <img src="https://source.unsplash.com/random/600x400" class="img-fluid news-image"
                                    alt="Random news image">
                            @endif
                            <div class="news-content">
                                <h5 class="news-title">{{ $news->title }}</h5>
                                <p>{{ Str::limit($news->content, 100) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
