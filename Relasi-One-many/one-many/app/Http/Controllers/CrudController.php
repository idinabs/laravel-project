<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Symfony\Contracts\Service\Attribute\Required;

class CrudController extends Controller
{
    public function home(){

        return view('home');
    }

    public function post(){

        $post = Category::latest()->paginate(3);

        return view('post', compact('post'));
    }

    public function add(){

        return view('add');
    }
    
    public function create(Request $request){

        $post = $request->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        $post['slug'] = \Str::slug($request->title);

        Category::create($post);

        return redirect('/post/');

    }

    public function show(Category $post){

        return view('show', compact('post'));
    }

    public function edit(Category $post){

        return view('edit', compact('post'));
    }

    public function update(Category $post){

        $update = request()->validate([
            
            'title' => 'required',
            'body'  => 'required',

        ]);

        $post->update($update);

        return redirect('/post')->with(['update' => 'Data berhasil telah disimpan']);
    }

    public function destroy(Category $post){

        $post->delete();
        return redirect('/post')->with(['delete' => "Data berhasil dihapus"]);
    }
}
