<title>Add Books</title>
@extends('layouts.app')

@section('title', 'Book Data')

@section('content')
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

    <a href="{{ route('book.create') }}">
        <button class="btn btn-primary mt-3">Add Books</button>
    </a>

    <a href="{{ route('export') }}">
        <button class="btn btn-success mt-3">Download Excel Report</button>
    </a>

    <a href="{{ route('createPDF') }}">
        <button class="btn btn-danger mt-3">Download PDF Report</button>
    </a>


    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

@endsection
