<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Category;

class BookController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBook = Book::all();
        return view('book.index', compact('allBook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publisher = Publisher::all();
        $category = Category::all();
        return view('book.create', compact('publisher', 'category') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'=> 'required|max:100',
            'author'=> 'required|max:100',
            'publication_name'=> 'required|max:4',
            'category_id'=> 'required',
            'publisher_id'=> 'required',
        ]);

        Book::create($validateData);

        return redirect()->route('book.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $publisher = Publisher::all();
        $category = Category::all();
        return view('book.edit', compact('book', 'publisher', 'category') );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validateData = $request->validate([
            'title'=> 'required|max:100',
            'author'=> 'required|max:100',
            'publication_name'=> 'required|max:4',
            'category_id'=> 'required',
            'publisher_id'=> 'required',
        ]);

        $book->update($validateData);

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
