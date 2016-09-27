<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {

        $users = User::all();
        $users->toJson();
        return view('welcome', compact('users'));
    }
}
