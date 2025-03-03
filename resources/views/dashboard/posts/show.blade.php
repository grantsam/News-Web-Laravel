@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="container-main col-lg-8">
                <section>
                    <div class="news-card">
                        <h1>{{ $post->title }}</h1>
                        <a href="/dashboard/posts" class="btn btn-success">Back</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                        <p>{{ $post->content }}</p>
                        
                        <div class="news-card col-md-12 text-center">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid news-image">
                            @elseif(isset($photo['urls']['regular']))
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
