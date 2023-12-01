@extends('layouts.master')

@section('title', 'Book Details')

@section('content')
<span class="books_list">
    @if($book)
        <strong>Title:</strong>             {{$book->title }}<br>
        <strong>Publication Year:</strong>  {{$book->year }}<br>
        <strong>Publication Place:</strong> {{$book->publication_place }}<br>
        <strong>Pages:</strong>             {{$book->pages }}<br>
        <strong>Price:</strong>             {{$book->price }}<br>
    @else
        <strong>The book's details were not found. Check if your book ID is correct!</strong><br>
    @endif
</span>
@endsection