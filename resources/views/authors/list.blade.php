@extends('layouts.master')

@section('title', 'Authors List')

@section('content')
<span class="authors_list">
    <a href="{{ url('/authors/create', '')}}">Add New Author</a> 
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-2" scope="col">Name</th>
                <th class="col-1" scope="col">Birthday</th>
                <th class="col-2" scope="col">Genre</th>
                <th class="col-3 mg-start" scope="col">Books Written</th>
                <th class="col-1" scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authorsList as $author)
                <tr>
                    <td>{{$author->firstname }} {{$author->lastname }}</td>
                    <td>{{$author->birthday }}</td>
                    <td>{{$author->genres }}</td>
                    <td>
                        @isset($author->books)
                            <ul>
                            @foreach($author->books as $book)
                                <li>
                                    {{$book->title}}({{$book->year}})
                                </li>
                            @endforeach
                            </ul>
                        @endisset
                    </td>

                    <td>
                        <!-- show method of author controller -->
                        {{-- <a class="px-2" href="{{ url('/authors', [$author->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                              </svg>
                        </a> --}}
                        <!-- edit method of author controller -->
                        <a class="px-2" href="{{ url('/authors', [$author->id, 'edit'])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg></a>

                        <!-- delete method of author controller -->
                        <a class="px-2" href="{{ url('/authors', [$author->id, 'delete'])}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
                        </a> 
                    </td>
                </tr>
                @empty
                Authors list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection