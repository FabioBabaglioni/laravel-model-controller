<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\MyModel;

class MainController extends Controller
{
    public function index(){
        return view('pages.home');
    }
}
