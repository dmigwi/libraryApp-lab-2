@extends('layouts.master')

@section('title', 'Books List')

@section('content')
<span class="books_list">
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col">Title</th>
                <th class="col-1" scope="col">Year</th>
                <th class="col-1" scope="col">Publication Place</th>
                <th class="col-1" scope="col">Pages</th>
                <th class="col-1" scope="col">Price</th>
                <th class="col-1" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($booklist as $book)
                <tr>
                    <td>{{$book->title }}</td>
                    <td>{{$book->year }}</td>
                    <td>{{$book->publication_place }}</td>
                    <td>{{$book->pages }}</td>
                    <td>{{$book->price }}</td>

                    <!-- show method of book controller -->
                    <td><a href="{{ url('/books', [$book->id]) }}">Details</a>
                </tr>
                @empty
                Book list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection