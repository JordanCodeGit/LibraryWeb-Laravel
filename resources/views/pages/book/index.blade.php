<title>Add Books</title>

@push('addonStyle')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endpush

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
                @foreach ($books as $index => $book)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
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
                            <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline"
                                id="delete-{{ $book->id }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger"
                                    onclick="confirmDelete('delete-{{ $book->id }}')">Delete</button>

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
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>

    @push('addonScript')
        <script>
            function confirmDelete(formId) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure to erase this ' + formId,
                    text: "This data will be erased permanently and cannot be recovered!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Erase this data!',
                    cancelButtonText: 'Cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(formId).submit();
                    }
                });
            }
        </script>
    @endpush

@endsection
