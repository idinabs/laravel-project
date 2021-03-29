@extends('layouts.app')

@section('body')

<div class="container">
    <div class="d-flex justisfy-content-start" style="padding-left: 140px; padding-top: 50px">
        <b><h1 style="color: black; Weight: 40px;">{{$post->slug}}</h1></b>
    </div>
    <div class="d-flex justisfy-content-start" style="padding-left: 100px;">
        <div class="text-secondary" style="padding-left: 50px;">
            <a href="/post/{{ $post->pay->slug }}">{{$post->pay->title}}</a> : {{$post->created_at->format('d F, Y')}}
        </div>
    </div>
    <br>
    <div class="d-flex justisfy-content-start" style="padding-left: 100px;">
       <p>{{$post->body}}</p>
    </div>
</div>
@endsection