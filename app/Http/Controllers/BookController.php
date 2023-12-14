<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Isbn;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $booklist = $book->all();
        return view('books/list', ['booklist'=> $booklist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books/edit', ['book'=> null, 'isbn' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookData = $request->only(['title', 'year', 'publication_place', 'pages', 'price']);
        $book = new Book();
        $book->fill($bookData);
        $book->save();

        $isbn = new Isbn($request->only(['number', 'issued_by', 'issued_on']));
        $book->isbn()->save($isbn);

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $book = Book::find($id);
        return view('books/show', ['book'=> $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $book = Book::find($id);
        return view('books/edit', ['book'=> $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $bookData = $request->only(['title', 'year', 'publication_place', 'pages', 'price']);
        $book = Book::whereId($id);
        $book->update($bookData);

        $isbnData = $request->only(['number', 'issued_by', 'issued_on']);
        $isbnObj = Isbn::where('book_id', $id);
      
        if ($isbnObj->first()) {
            $isbnObj->update($isbnData);
        } else {
            $isbnObj = new Isbn($isbnData);
            $isbnObj->fill(['book_id' => $id]);
            $isbnObj->save();
        }
        
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Book::find($id)->delete();
        return redirect('books');
    }
}
