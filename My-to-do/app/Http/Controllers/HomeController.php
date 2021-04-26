<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class HomeController extends Controller
{
    public function home(){
      
        $post = Todo::paginate(10);

        return view('root/app', compact('post'));
    }

    public function add(Request $request){

        $post = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        Todo::create($post);

        return redirect('/');

    }
    public function delete(Todo $title){

        $title->delete();
        return redirect('/')->with(['delete' => "Data berhasil dihapus"]);

    }

}
