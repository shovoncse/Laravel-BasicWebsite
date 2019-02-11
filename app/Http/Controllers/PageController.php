<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Index
    public function index(){
        return view('pages.index');
    }
    //About
    public function about(){
        return view('pages.about');
    }
    //Service
    public function service(){
        return view('pages.service');
    }
    //Contact
    public function contact(){
        return view('pages.contact');
    }
}
