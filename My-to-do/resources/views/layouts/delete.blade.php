<form action="/delete/{{ $item->judul }}" method="post">
    @csrf
        @method('delete')
        <ul class="fa-ul">
            <button type="submit" class="btn btn-outline-success"><i class="fa fa-check"></i></button>
        </ul>
</form>