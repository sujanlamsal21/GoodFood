<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function signup(){
        return view('pages.signup');
    }
}
