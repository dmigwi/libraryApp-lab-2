@extends('layouts.master')

@section('title', 'Loans List')

@section('content')
<span class="movies_list">
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col">Title</th>
                <th class="col-1" scope="col">FirstName</th>
                <th class="col-1" scope="col">LastName</th>
                <th class="col-1" scope="col">Birthday</th>
                <th class="col-1" scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authorsList as $author)
                <tr>
                    <td>{{$author->book->title }}</td>
                    <td>{{$author->firstname }}</td>
                    <td>{{$author->lastname }}</td>
                    <td>{{$author->birthday }}</td>
                    <td>{{$author->genres }}</td>

                    {{-- <!-- show method of author controller -->
                    <td><a href="{{ url('/authors', [$author->id]) }}">Details</a>
                    <!-- edit method of author controller -->
                    <td> <a href="{{ url('/authors', [$author->id, 'edit'])}}">Edit</a> </td>
                    <!-- delete method of author controller -->
                    <td> <a href="{{ url('/authors', [$movie->id, 'delete'])}}">Delete</a> </td> --}}
                </tr>
                @empty
                Authors list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection