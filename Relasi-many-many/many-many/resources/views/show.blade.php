@extends('layouts.app')

@section('body')

<div class="container">
    <div class="d-flex justisfy-content-start" style="padding-left: 100px; padding-top: 50px">
        <b><h1 style="color: black; Weight: 40px;">{{$post->slug}}</h1></b>
    </div>
    <div class="d-flex justisfy-content-start" style="padding-left: 100px;">
        <div class="text-secondary" style="padding-left: 50px;">
            {{$post->pay->title}} : {{$post->created_at->format('d F, Y')}}
        </div>
    </div>
    <br>
    <div class="d-flex justisfy-content-start" style="padding-left: 100px;">
       <p>{{$post->body}}</p>
    </div>
</div>
@endsection