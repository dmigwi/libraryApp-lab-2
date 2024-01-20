@extends('layouts.master')

@section('title', 'Book Details')

@section('content')
<span class="books_list">
    @if($book)
    <table class='form-group form-table table'>
        <tr class=''>
            <td class="font-weight-bold">Book title:</td>
            <td>{{$book->title }}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Publication year:</td>
            <td>{{$book->year }}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Publication place:</td>
            <td>{{$book->publication_place }}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Number of pages:</td>
            <td>{{$book->pages }}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Book price:</td>
            <td>{{$book->price }}</td>
        </tr>

        @isset($book->isbn)
        <tr class=''>
            <td class="font-weight-bold">ISBN number:</td>
            <td>{{$book->isbn->number}}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Issued by:</td>
            <td>{{$book->isbn->issued_by }}</td>
        </tr>
        <tr class=''>
            <td class="font-weight-bold">Date of ISBN:</td>
            <td>{{$book->isbn->issued_on }}</td>
        </tr>
        @endisset

        @isset($book->authors)
        <tr class=''>
            <td class="font-weight-bold">Authors:</td>
            <td>
                <ul>
                    @forelse($book->authors as $author)
                        <li>
                            {{$author->lastname}} {{$author->firstname}}
                        </li>
                    @empty
                        No Authors set added!
                    @endforelse
                </ul>
            </td>
        </tr>
        @endisset

    </table>
    @else
    <strong>The book's details were not found. Check if your book ID is correct!</strong><br>
    @endif
</span>
@endsection