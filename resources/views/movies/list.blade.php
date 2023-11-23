@extends('layouts.master')

@section('title', 'Books List')

@section('content')
<span class="movies_list">
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col">Title</th>
                <th class="col-1" scope="col">Director Name</th>
                <th class="col-1" scope="col">Production Year</th>
                <th class="col-1" scope="col">Genre</th>
                <th class="col-1" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movieslist as $movie)
                <tr>
                    <td>{{$movie->title }}</td>
                    <td>{{$movie->director_name }}</td>
                    <td>{{$movie->production_year }}</td>
                    <td>{{$movie->genre }}</td>

                    <!-- show method of movie controller -->
                    <td><a href="{{ url('/movies', [$movie->id]) }}">Details</a>
                </tr>
                @empty
                Movie list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection