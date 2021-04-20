@extends('layouts.app')

@section('body')
    

@if ($post->count())
<div class="container">
    <h1 style="color: black;">All Post</h1>
    @if ($message = Session::get('update'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

    @if ($message = Session::get('delete'))
        <div class="aler alert-danger">
            {{$message}}
        </div>
    @endif

    <a href="/post/add/" style="" class="btn btn-primary">Tambah</a>
</div>

<div class="container">    
<div style="margin-top: -60px" class="row mb-5">
    @foreach ($post as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><b>{{ $item->title }}</b></h3>
                    <p class="card-text">{{ Str::limit($item->body, '30') }}</p>
                    <a href="/post/{{ $item->slug }}/show/" class="btn btn-sm btn-primary">Go somewhere</a>
                </div>
                <form action="/post/{{ $item->slug }}/delete" method="POST">
                    @csrf
                    @method('delete')
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                        <div class="d-flex justify-content-between">
                            <a href="/post/{{ $item->slug }}/edit" class="btn btn-warning">Edit</a>
                            
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Hapus
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda ingin menghapus data <b>{{ $item->title }}</b> ??
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    @endforeach
</div>
<div class="container">
    <div class="d-flex justify-content-center">
        {{ $post->links() }}
    </div>
</div>
</div>     
@else
<div class="container">
    <h1 style="color: black;">All Post</h1>
    <a href="/post/add/" style="" class="btn btn-primary">Tambah</a>
    <div class="container">
        <div class="alert alert-danger">
            Maaf tidak ada data yang ditemukan
        </div>
    </div>
</div>

    
@endif


@endsection