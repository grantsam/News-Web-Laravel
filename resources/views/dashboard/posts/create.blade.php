@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        title.addEventListener('change', function() {
            console.log("Title changed:", title.value);

            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.text()) // Gunakan .text() dulu untuk debugging
                .then(data => {
                    console.log("Response received:", data);
                    try {
                        const jsonData = JSON.parse(data);
                        slug.value = jsonData.slug;
                    } catch (error) {
                        console.error("JSON parse error:", error, "Response:", data);
                    }
                })
                .catch(error => console.error('Fetch error:', error));
        });
    </script>
@endsection
