{{-- <input type='hidden' name='_token' value='{{ csrf_token()}}' />  --}}
@csrf
<table class='form-group form-table'>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">FirstName:</td>
        <td>
            <input type='text' name='firstname' value="{{$author->firstname ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">LastName:</td>
        <td>
            <input type='text' name='lastname'  value="{{$author->lastname ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Birthday:</td>
        <td>
            <input type='number' max='2099' min='1500' name='birthday'  value="{{$author->birthday ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Genre:</td>
        <td>
            <input type='text' name='genre' value="{{$author->genre ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Book(s) Authored :</td>
        <td>
            @isset($author->authors)
                <ul>
                @forelse($author->books as $book)
                    <li class="form-check form-switch d-block">
                        {{$book->title}}  ({{$book->year}})
                    </li>
                @empty
                    No Authored book found!
                @endforelse
                </ul>
            @endisset
        </td>
    </tr>
</table>

@if(is_null($author))
    <input type="submit" value="Add an Author" class='btn btn-primary' />  
@else
    <input type="submit" value="Update an Author" class='btn btn-primary' />  
@endif 