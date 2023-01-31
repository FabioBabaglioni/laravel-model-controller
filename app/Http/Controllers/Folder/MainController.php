<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movies;

class MainController extends Controller
{
    public function home(){

        $movies = Movies::all();

        $data = [
            'movies' => $movies
        ];

        return view('pages.home', $data);
    }
}
