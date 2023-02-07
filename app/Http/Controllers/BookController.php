<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function addBook(){
        return view('admin.create-book');
    }

    public function createBook(Request $request){
        $book = $request->validate([
            'tittle' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'release_date' => 'required',
            'cover' => 'required',
        ]);

        Book::create($book);

        return redirect('books');
    }
    
    public function deleteBook(Request $request, $id){
        Book::where('id', $id)->delete();
        return redirect(route('books'));
    }
}
