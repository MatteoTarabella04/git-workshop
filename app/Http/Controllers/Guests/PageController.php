<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index () {
        return view('welcome');
    }
    public function about () {
        return view('about');
    }
    public function contacts () {
        return view('contacts');
    }
}
