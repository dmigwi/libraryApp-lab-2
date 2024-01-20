@extends('layouts.master')
@if(is_null($author))
     @section('title', 'Create Author')
@else
     @section('title', 'Update Author')
@endif 

@section('content')
<span class="authors_list">
     @if(is_null($author))
          <h2 style="text-align:center;">New Author</h2>
          <form action="{{ action('App\Http\Controllers\AuthorController@store') }}" method="POST" role="form">
               @include('authors.form', ['author' => null])
          </form>
     @else
          <h2 style="text-align:center;">Update Author</h2>
          <form action="{{ action('App\Http\Controllers\AuthorController@update', ['author' => $author])}}" method="POST" role="form">
               {{ method_field('PUT') }}
               @includeIf('authors.form', ['author' => $author])
          </form> 
    @endif

</span>
@endsection
