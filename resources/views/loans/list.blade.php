@extends('layouts.master')

@section('title', 'Loans List')

@section('content')
<span class="movies_list">
    <table class="table table-striped table-sm mx-md-n5 table-responsive-sm">
        <thead>
            <tr>
                <th class="col-1" scope="col">Title</th>
                <th class="col-1" scope="col">Client</th>
                <th class="col-1" scope="col">Loaned On</th>
                <th class="col-1" scope="col">Estimated On</th>
                <th class="col-1" scope="col">Returned On</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($loansList as $loan)
                <tr>
                    <td>{{$loan->book->title }}</td>
                    <td>{{$loan->client }}</td>
                    <td>{{$loan->loaned_on }}</td>
                    <td>{{$loan->estimated_on }}</td>
                    <td>{{$loan->returned_on }}</td>

                    {{-- <!-- show method of loan controller -->
                    <td><a href="{{ url('/loans', [$loan->id]) }}">Details</a>
                    <!-- edit method of loan controller -->
                    <td> <a href="{{ url('/loans', [$loan->id, 'edit'])}}">Edit</a> </td>
                    <!-- delete method of loan controller -->
                    <td> <a href="{{ url('/loans', [$movie->id, 'delete'])}}">Delete</a> </td> --}}
                </tr>
                @empty
                loans list is empty!
            @endforelse
        </tbody>
    </table>
</span>
@endsection