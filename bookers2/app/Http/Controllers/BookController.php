<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Auth;
use Illuminate\Support\Carbon;



class BookController extends Controller
{
    public function Create(Request $request) {
        Book::insert([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('book.index')->with('success','Book Created Successfull');
    }

    public function Index() {
        $books = Book::with('user')->get();
        return view('book.index', compact('books'));
    }
}
