<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $authorsList=Author::all();
        return view('authors/list',['authorsList' => $authorsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $booksList=Book::all();
        return view('authors/edit', ['author'=> null, 'books' => $booksList]);
        // $networks = Book::where('title','Sample Book')->first();
        // $author = new Author();
        // $author->lastname = 'Kurose';
        // $author->firstname = 'James';
        // $author->birthday = '1970-01-01';
        // $author->genres = 'Computer science';
        // $author->fill(['book_id' => $networks->id]);
        // $author->create();

        // $author2 = new Author();
        // $author2->lastname = 'Ross';
        // $author2->firstname = 'Keith';
        // $author2->birthday = '1985-02-02';
        // $author2->genres = 'Computer science';
        // $author2->fill(['book_id' => $networks->id]);
        // $author2->create();

        
        // $networks->authors()->save($author);
        // $networks->authors()->save($author2);
        // return redirect('books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
