<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('layouts.app', compact('movies'));
    }

    public function card(){
        $movies = Movie::all();
        return view('cards', compact('movies'));
    }
}
