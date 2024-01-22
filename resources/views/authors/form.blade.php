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
            <input type='date' max='2099' min='1500' name='birthday'  data-date-format="DD/MM/YYYY" value="{{$author->birthday ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Genre:</td>
        <td>
            <input type='text' name='genres' value="{{$author->genres ?? ''}}" required/>
        </td>
    </tr>
    <tr class='form-control form-group'>
        <td class="font-weight-bold">Book(s) Authored :</td>
        <td>
            @isset($booksList)
                <ul class="list-display form-check" style="padding-inline-start: 10px;">
                @forelse($booksList as $book)
                    @php $isChecked = false; @endphp

                    @isset($author-> books)
                        @foreach($author-> books as $selectedBook)
                            @if ($book->title === $selectedBook -> title)
                                    @php $isChecked = true @endphp
                                @break
                            @endif
                        @endforeach
                    @endisset

                    <li class="form-check form-switch d-blocks">
                        <label>
                            <input type="checkbox" name="book_id" value="{{$book->id}}" @checked($isChecked) style="width:min-content;">
                            {{$book->title}}  ({{$book->year}})
                        </label>
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