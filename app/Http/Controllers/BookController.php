<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("pages.books.index", compact("books"));
    }
    public function show($slug){
        $book = Book::where("slug", $slug)->orWhere("id", $slug)->first();
        if($book){
            return view("pages.books.detail", compact("book"));
        }else{
            return redirect("/books");
        }
    }
}
