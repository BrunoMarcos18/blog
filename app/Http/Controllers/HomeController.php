<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("layouts/blog/home", [
            'articles' => Articles::inRandomOrder()->limit(3)->get()
        ]);
    }
}
