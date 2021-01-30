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
        $user = Auth::user();
        return view('book.index', compact('books', 'user'));
    }

    public function Show($id) {
        $book = Book::with('user')->find($id);
        return view('book.show', compact('book'));
    }

    public function Edit($id) {
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    public function Update(Request $request, $id) {
        $update = Book::find($id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('book.show', $id);
    }

    public function Delete($id) {
        $delete = Book::find($id)->delete();
        return Redirect()->route('book.index');
    }
}
