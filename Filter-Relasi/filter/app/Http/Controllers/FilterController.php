<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pay;

class FilterController extends Controller
{
    public function show(Pay $pay){

        $post = $pay->categories()->paginate(3);
        
        return view('post', compact('post', 'pay'));
    }
}
