@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="container-main col-lg-8">
                <section>
                    <div class="news-card">
                        <h1>Random Photo from Unsplash</h1>

                        <div class="news-card col-md-12"
                            style="display: flex; justify-content: center; align-items: center;">
                            @if(isset($photo['urls']['regular']))
                                <img src="{{ $photo['urls']['regular'] }}" 
                                    alt="{{ $photo['alt_description'] ?? 'Random Unsplash Photo' }}" 
                                    class="img-fluid news-image">
                            @else
                                <p>Gagal memuat gambar.</p>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
