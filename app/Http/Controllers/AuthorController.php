<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display author's list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    /**
     * Store new author in database.
     *
     * @param  App\Http\Requests\AuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {   
        $author = new Author();
        $author->name = $request->name;
        $author->save();
        return response()->json($author, 201);
    }

    /**
     * Show specific author's data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return response()->json($author);
    }

    /**
     * Update author's data on database.
     *
     * @param  App\Http\Requests\AuthorRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->save();
        return response()->json($author);
    }

    /**
     * Remove the author from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Author::findOrFail($id)->delete();        
        return response()->json($delete);
    }
}
