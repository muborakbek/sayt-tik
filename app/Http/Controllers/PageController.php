<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('main');
    }

    public function about(){
        return view('about');
    }

    public function team(){
        return view('team');
    }

    public function news(){
        return view('news');
    }


    public function contact(){
        return view('contact');
    }

    // public function team(){
    //     return view('team');
    // }
}
