<input type='hidden' name='_token' value='{{ csrf_token()}}' /> 
@csrf
<div class='form-group'>
    <input type='text' class='form-control' name='title'  placeholder="Title of book" value="{{$book->title ?? ''}}" />
</div>
<div class='form-group'>
    <input type='number' max='2099' min='1500' class='form-control' name='year'  placeholder="Publication Year" value="{{$book->year ?? ''}}" />
</div>
<div class='form-group'>
    <input type='text' class='form-control' name='publication_place'  placeholder="Publication Place" value="{{$book->publication_place ?? ''}}" />
</div>
    <div class='form-group'>
    <input type='number' min='0' class='form-control' name='pages'  placeholder="Number of Pages" value="{{$book->pages ?? ''}}"/>
</div>
    <div class='form-group'>
    <input type='number' min="0.00" max="100000.00" step="0.01" class='form-control' name='price'  placeholder="Book Price (Złoty)" value="{{$book->price ?? ''}}"/>
</div>
@if(is_null($book))
    <input type="submit" value="Add a book" class='btn btn-primary' />  
@else
    <input type="submit" value="Update a book" class='btn btn-primary' />  
@endif 