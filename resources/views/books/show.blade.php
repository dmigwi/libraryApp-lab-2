@extends('layouts.master')

@section('title', 'Book Details')

@section('content')
<span class="books_list">
    @if($book)
        <strong>Title:</strong>             {{$book->title }}<br>
        <strong>Publication Year:</strong>  {{$book->year }}<br>
        <strong>Publication Place:</strong> {{$book->publication_place }}<br>
        <strong>Pages:</strong>             {{$book->pages }}<br>
        <strong>Price:</strong>             {{$book->price }} złoty<br>
    @else
        <strong>The book's details were not found. Check if your book ID is correct!</strong><br>
    @endif
    @isset($book->isbn)
        <strong>ISBN number:</strong>             {{$book->isbn->number}}<br>
        <strong>Issued by:</strong>               {{$book->isbn->issued_by}}<br>
        <strong>Date of ISBN:</strong>             {{$book->isbn->issued_on}}<br>
    @endisset
</span>
@endsection 