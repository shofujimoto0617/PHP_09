<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Book;


class UserController extends Controller
{
    public function Show($id) {
        $user = User::find($id);
        $books = User::find($id)->books;
        return view('user.show', compact('user','books'));
    }

    public function Index() {
        $users = User::all();
        $user = Auth::user();
        return view('user.index', compact('users', 'user'));
    }
}
