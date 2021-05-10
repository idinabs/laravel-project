<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class HomeController extends Controller
{
    public function home(){
      
        $post = Todo::paginate(4);

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

    // public function edit(){

    //     return view('edit');
    // }

    public function edit(Todo $update){

        return view('layouts.edit.edit', compact('update'));
    }

    public function upd(Todo $update){

        $edit = request()->validate([
            
            'judul' => 'required|max:30' ,
            'keterangan'  => 'required',

        ]);

        $update->update($edit);

        // dd($post);
        return redirect('/')->with(['update' => 'Data berhasil telah disimpan']);
    }

    public function delete(Todo $title){

        $title->delete();
        return redirect('/')->with(['delete' => "Data berhasil dihapus"]);

    }

    public function service(){

        return view('layanan.service');
    }

}
