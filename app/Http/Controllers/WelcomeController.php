<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    
}
