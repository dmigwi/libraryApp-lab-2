<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books/list', ['booklist'=> array(
            array("author"=>"F. Scott Fitzgerald", "name"=>"The Great Gatsby"),
            array("author"=>"Emily Brontë", "name"=>"Wuthering Heights"),
            array("author"=>"Margaret Atwood", "name"=>"The Handmaid's Tale"),
            array("author"=>"Chinua Achebe", "name"=>"Things Fall Apart"),
            array("author"=>"George Orwell", "name"=>"1984"),
            array("author"=>"Toni Morrison", "name"=>"Beloved"),
            array("author"=>"J.D. Salinger", "name"=>"The Catcher in the Rye"),
            array("author"=>"Charles Dickens", "name"=>"Great Expectations"),
        )]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "BookController.show $id";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
