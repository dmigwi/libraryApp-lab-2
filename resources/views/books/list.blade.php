@extends('layouts.master')

@section('title', 'Books List')

@section('content')
<span class="books_list">
    <a href="{{ url('/books/create', '')}}">Add New Books</a> 
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col"></th>
                <th class="col-5" scope="col">Title</th>
                <th class="col-2" scope="col">Veiw Details</th>
                <th class="col-2" scope="col">Update Details</th>
                <th class="col-2" scope="col">Delete Book</th>
                {{-- <th class="col-1" scope="col">Price</th>
                <th class="col-1" scope="col"></th> --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($booklist as $book)
                <tr>
                    <td>{{$book->id }}</td>
                    <td>{{$book->title }}</td>
                    {{-- <td>{{$book->year }}</td>
                    <td>{{$book->publication_place }}</td>
                    <td>{{$book->pages }}</td>
                    <td>{{$book->price }}</td> --}}

                    <!-- show method of book controller -->
                    <td><a href="{{ url('/books', [$book->id]) }}">Details</a> </td>
                    <!-- edit method of book controller -->
                    <td> <a href="{{ url('/books', [$book->id, 'edit'])}}">Edit</a> </td>
                    <!-- delete method of book controller -->
                    <td> <a href="{{ url('/books', [$book->id, 'delete'])}}">Delete</a> </td>
                </tr>
                @empty
                Book list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection