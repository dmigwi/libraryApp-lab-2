@extends('layouts.master')
@if(is_null($book))
     @section('title', 'Create Book')
@else
     @section('title', 'Update Book')
@endif 

@section('content')
<span class="books_list">
     @if(is_null($book))
          <h2 style="text-align:center;">New Book</h2>
          <form action="{{ action('App\Http\Controllers\BookController@store') }}" method="POST" role="form">
               @include('books.form', ['book' => null])
          </form>
     @else
          <h2 style="text-align:center;">Update Book</h2>
          <form action="{{ action('App\Http\Controllers\BookController@update', ['book' => $book])}}" method="UPDATE" role="form">
               @includeIf('books.form', ['id' => $book])
          </form> 
    @endif

</span>
@endsection