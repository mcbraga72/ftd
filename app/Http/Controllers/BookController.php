<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display book's list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * Store new book in database.
     *
     * @param  App\Http\Requests\BookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {   
        $book = new Book();
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->cover = $request->cover;
        $book->level = $request->level;
        $book->price = $request->price;
        $book->save();
        return response()->json($book, 201);
    }

    /**
     * Show specific book's data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    /**
     * Update book's data on database.
     *
     * @param  App\Http\Requests\BookRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->cover = $request->cover;
        $book->level = $request->level;
        $book->price = $request->price;
        $book->save();
        return response()->json($book);
    }

    /**
     * Remove the book from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Book::findOrFail($id)->delete();        
        return response()->json($delete);
    }

}
