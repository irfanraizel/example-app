<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutList() {
        return view('about', [
            "title" => "About",
            "aboutList" => About::all()
        ]);
    }

    public function aboutSingle($slug) {
        return view('aboutItem', [
            "title" => About::title($slug)['title'],
            "aboutItem" => About::find($slug)
        ]);
    }
}
