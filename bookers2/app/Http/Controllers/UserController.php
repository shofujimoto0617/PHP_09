<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    public function Show() {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
}
