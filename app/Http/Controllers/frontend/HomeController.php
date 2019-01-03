<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        return view("frontend.home.about");
    }
    public function audio()
    {
        return view("frontend.home.single-audio");
    }
    public function video()
    {
        return view("frontend.home.single-video");
    }
    public function gallery()
    {
        return view("frontend.home.single-gallery");
    }
    public function standart()
    {
        return view("frontend.home.single-standart");
    }

    public function contact()
    {
        return view("frontend.home.contact");
    }

   public function page_about()
    {
        return view("frontend.home.page_about");
    }
    public function style()
    {
        return view("frontend.home.style");
    }
    



}