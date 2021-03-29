@extends('snippet.header')

<div class="container">
<div class="frame">
<div class="nav">
<ul class"links">
    <li class="signin-active"><a class="btn">Tambah Data</a></li>
</ul>
</div>
<div ng-app ng-init="checked = false">
        <form class="form-signin" action="/post/{{$post->slug}}/edit" method="post" >
            @method('patch')
            @csrf
                <label for="title">Title</label>
                <input class="form-styling" type="text" value="{{ $post->title }}" name="title" id="title" placeholder=""/>
                @error('title')
                   <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{ $post->body }}</textarea>
                @error('body')
                   <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="btn-animate">
                   <button class="btn-signin">Tambah Data</button>
                </div>
        </form>
</div>