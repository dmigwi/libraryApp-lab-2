{{-- <input type='hidden' name='_token' value='{{ csrf_token()}}' />  --}}
@csrf
<table class='form-group form-table'>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Book Title :</td>
        <td><input type='text' name='title' value="{{$book->title ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Publication Year:</td>
    <td><input type='number' max='2099' min='1500' name='year' value="{{$book->year ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Publication Place:</td>
        <td><input type='text' name='publication_place'  value="{{$book->publication_place ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Number of Pages:</td>
        <td><input type='number' min='0' name='pages'  value="{{$book->pages ?? ''}}"/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Book Price (Złoty):</td>
        <td><input type='number'min="0.00" step="0.01" name='price' value="{{$book->price ?? ''}}"/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">ISBN Number :</td>
        <td><input type='text' name='number' value="{{$book->isbn->number ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Issued By :</td>
        <td><input type='text' name='issued_by' value="{{$book->isbn->issued_by ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Issued On :</td>
        <td><input type='date' name='issued_on' value="{{$book->isbn->issued_on ?? ''}}" required/></td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Author(s) :</td>
        @isset($book->authors)
            <td>
            @foreach($book->authors as $author)
                <li>
                    {{$author->lastname}}  {{$author->firstname}}
                </li>
            @endforeach
            </td>
        @endisset
    </tr>
</table>

@if(is_null($book))
    <input type="submit" value="Add a book" class='btn btn-primary' />  
@else
    <input type="submit" value="Update a book" class='btn btn-primary' />  
@endif 