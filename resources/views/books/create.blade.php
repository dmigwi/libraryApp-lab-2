@extends('layouts.master')

@section('title', 'Create Book')

@section('content')
<span class="books_list">
    <h2 style="text-align:center;">New Book</h2>
    <form action="{{ action('App\Http\Controllers\BookController@store') }}" method="POST" role ="form">
        <input type='hidden' name='_token' value='{{ csrf_token()}}' /> 
    @csrf
    
    <div class='form-group'>
         <input type='text' class='form-control' name='title'  placeholder="Title of book" />
    </div>
    <div class='form-group'>
         <input type='number' max='2099' min='1500' class='form-control' name='year'  placeholder="Publication Year" />
    </div>
    <div class='form-group'>
         <input type='text' class='form-control' name='publication_place'  placeholder="Publication Place" />
    </div>
     <div class='form-group'>
         <input type='number' min='0' class='form-control' name='pages'  placeholder="Number of Pages" />
    </div>
     <div class='form-group'>
         <input type='number' min="0.00" max="10000.00" step="0.01" class='form-control' name='price'  placeholder="Book Price" />
    </div>
         
    <input type="submit" value="Add a book" class='btn btn-primary' />    
    </form> 
</span>
@endsection