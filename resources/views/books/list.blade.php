@extends('layouts.master')

@section('title', 'Books List')

@section('content')
<span class="books_list">
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col">Author</th>
                <th class="col-1" scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booklist as $data)
                <tr>
                    <td>{{ $data['author'] }}</td>
                    <td>{{ $data['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</span>
@endsection