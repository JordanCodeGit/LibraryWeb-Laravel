<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #302b63;
            color: white;
        }
    </style>
</head>

<body>

    <h1>List Data Buku Perpustakaan</h1>

    <table id="customers">
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
            @foreach ($book as $index => $book)
                <tr>
                    <th scope="row">
                        {{ $index+1 }}
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

</body>

</html>
