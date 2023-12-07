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
        $book = new Book();
        $book->title = "Computer Networking: A Top-Down Approach";
        $book->year = 2018;
        $book->publication_place = "London";
        $book->pages = 764;
        $book->price = 101.00;
        $book->save();
        $isbn = new Isbn([ 'number' => '32145678', 'issued_by' => 'Publisher2', 'issued_on' => '2016-06-06']);
        $book->isbn()->save($isbn);
        return redirect('books');
        // return view('books/edit', ['book'=> null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $book = new Book();
        $book->fill($data);
        $book->save();
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
        $data = $request->all();
        // $book = Book::find($id)([
        //     'title' => $request->input('title'),
        //     'year'=> $request->input('year'),
        //     'publication_place'=> $request->input('publication_place'),
        //     'pages'=> $request->input('pages'),
        //     'price'=> $request->input('price')
        //   ]);
        $book = Book::find($id);
        $book->fill($data);
        // $book->title = $request->input('title');
        // $book->year = $request->input('year');
        // $book->publication_place = $request->input('publication_place');
        // $book->pages = $request->input('pages');
        // $book->price = $request->input('price');
        // $book->update();
        $book->save();
        return redirect('books');
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
