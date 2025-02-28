@extends('dashboard.layouts.main')

@section('container')

<!--body-->
<div class="container mt-4">
    <div class="row">
        <div class="container-main col-lg-8">
            <!-- Main News -->
            <section>

                <div class="news-card">
                    <h1>{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success">back</a>
                    <a href="" class="btn btn-warning">edit</a>
                    <a href="" class="btn btn-danger">delete</a>
                    <p>
                        {{ $post->content }}
                    </p>
                    <div class="news-card col-md-12"
                        style="display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid news-image">
                    </div>
                </div>

            </section>

    

@endsection
