

<tbody>

@if ($post->count())

@foreach ($post as $item)
    <tr>
        <td>
            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
        </td>
        <td>
            {{$item->judul}}
        </td>
        <td>
            <div class="d-flex justify-content-beeatwen">
                
                {{-- @include('edit') --}}
                <ul class="fa-ul">
                   <a href="/post/{{ $item->judul}}/edit"><button type="submit" class="btn btn-outline-warning"><i class="fa fa-edit"></i></button></a> 
                </ul>

                @include('layouts.delete')
            </div>
        </td>
        <td>Active</td>
    </tr>

@endforeach

@endif
</tbody>

