{{-- <input type='hidden' name='_token' value='{{ csrf_token()}}' />  --}}
@csrf
<div class='form-group'>
    <input type='text' class='form-control form-group' name='title' placeholder="Title of book" value="{{$book->title ?? ''}}" required/>
    <input type='number' max='2099' min='1500' class='form-control form-group' name='year'  placeholder="Publication Year" value="{{$book->year ?? ''}}" required/>
    <input type='text' class='form-control form-group' name='publication_place' placeholder="Publication Place" value="{{$book->publication_place ?? ''}}" required/>
    <input type='number' min='0' class='form-control form-group' name='pages' placeholder="Number of Pages" value="{{$book->pages ?? ''}}"/>
    <input type='number'class='form-control form-group' min="0.00" step="0.01" name='price' placeholder="Book Price (Złoty)" value="{{$book->price ?? ''}}"/>
    <input type='text' class='form-control form-group' name='number' placeholder="ISBN Number" value="{{$book->isbn->number ?? ''}}" required/>
    <input type='text' class='form-control form-group' name='issued_by' placeholder="Issued By" value="{{$book->isbn->issued_by ?? ''}}" required/>
    <input type='date' class='form-control form-group' name='issued_on' placeholder="Issued On" value="{{$book->isbn->issued_on ?? ''}}" required/>
</div>

@if(is_null($book))
    <input type="submit" value="Add a book" class='btn btn-primary' />  
@else
    <input type="submit" value="Update a book" class='btn btn-primary' />  
@endif 