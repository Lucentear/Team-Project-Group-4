<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('/products', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('showproducts', ['book' => $book]);
    }
}
