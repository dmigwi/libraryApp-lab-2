<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

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
        return view('authors/edit', ['author'=> null, 'booksList' => $booksList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authorData = $request->only(['firstname', 'lastname', 'birthday', 'genres']);
        $author = new Author();
        $author->fill($authorData);
        $author->save();

        $books = $request->only(['book_id']);
        foreach ($books as $book) {
            $network=Book::find((int)($book));
            if ($network->first()) {
                $network->authors()->save($author);
            }
        }
        return redirect('authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $booksList=Book::all();
        $author = Author::find($id);
        return view('authors/edit', ['author'=> $author, 'booksList' => $booksList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $authorData = $request->only(['firstname', 'lastname', 'birthday', 'genres']);
        $author = Author::find($id);
        $author->fill($authorData);
        $author->save();

        // Delete all the previous books associated with the current author.
        DB::table('author_book')->where('author_id', $id)->delete();

        $books = $request->only(['book_id']);
        foreach ($books as $book) {
            $network=Book::find((int)($book));
            if (!empty($network)) {
                $network->authors()->save($author);
            }
        }
        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        Author::find($id)->delete();
        return redirect('authors');
    }
}
