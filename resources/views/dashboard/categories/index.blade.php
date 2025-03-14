@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Categories</h1>
    </div>

    <div class="table-responsive small">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create Category</a>
        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td> 
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">View</a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">Edit</a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
