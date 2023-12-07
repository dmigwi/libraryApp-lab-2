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
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i<count($booklist); $i++)
                <tr>
                    <td>{{$i + 1 }}</td>
                    <td>{{$booklist[$i]->title }}</td>
                
                    <!-- show method of book controller -->
                    <td><a href="{{ url('/books', [$booklist[$i]->id]) }}">Details</a> </td>
                    <!-- edit method of book controller -->
                    <td> <a href="{{ url('/books', [$booklist[$i]->id, 'edit'])}}">Edit</a> </td>
                    <!-- delete method of book controller -->
                    <td> <a href="{{ url('/books', [$booklist[$i]->id, 'delete'])}}">Delete</a> </td>
                </tr>
    
            @endfor
            @if(empty($booklist))
                Book list is empty!
            @endif
        </tbody>
    </table>
</span>
@endsection