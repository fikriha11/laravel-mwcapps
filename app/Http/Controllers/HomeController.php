<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function pengurus(){
        return view('pengurus');
    }
    public function ranting(){
        return view('ranting');
    }
    public function detail(){
        return view('detail-event');
    }
}
