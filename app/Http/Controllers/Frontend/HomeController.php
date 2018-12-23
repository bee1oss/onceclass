<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.home.index");
    }

    public function cate()
    {
        return view("frontend.home.category");
    }
    public function about()
    {
        return view("frontend.home.page-about");
    }

    public function contact()
    {
        return view("frontend.home.contact");
    }

    public function audio()
    {
        return view("frontend.home.single-audio");
    }
    public function standart()
    {
        return view("frontend.home.single-standart");
    }
}