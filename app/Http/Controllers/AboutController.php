<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Yudi Saeful Rizal",
            "email" => "yudienam666@gmail.com",
            "image" => "limen-mini.jpg"
        ]);
    }
}
