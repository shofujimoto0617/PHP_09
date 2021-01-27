<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    public function Show($id) {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function Index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }
}
