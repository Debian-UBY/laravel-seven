<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //membuat simple controller
    public function home(){
        return view('welcome');
    }

    public function hello(){
        return view('hello');
    }
    public function contact(){
        return view('contact');
    }
    public function produk(){
        return view('produk');
    }
}
