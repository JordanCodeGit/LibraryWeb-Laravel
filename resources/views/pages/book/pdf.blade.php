<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Book Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Year of Publishment</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $book)
                <tr>
                    <th scope="row">
                        {{ $book->id }}
                    </th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
