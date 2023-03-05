@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Books</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $cb }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Categories</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{  $cc  }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Book Title</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col">Year of Publishment</th>
        <th scope="col">Book Cover</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" width="100px">
            </td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->category }}</td>
            <td nowrap>
                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
