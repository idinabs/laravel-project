<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

class HomeController extends Controller
{
    public function home() {

        $post = Home::paginate(4);

        return view('Home', compact('post'));
    }

}
