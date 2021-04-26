
@foreach ($post as $item)

<tbody>
    <tr>
            
            <td>
                <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
            </td>
            <td>{{$item->judul}}</td>
            <td>
                <div class="d-flex justify-content-beeatwen">
                    
                    <ul class="fa-ul">
                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-edit"></i></button>
                    </ul>

                    <form action="/delete/{{ $item->judul }}" method="post">
                        @csrf
                        @method('delete')
                        <ul class="fa-ul">
                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-check"></i></button>
                        </ul>
                    </form>
                </div>
            </td>
            <td>Active</td>
            
        
    </tr>
</tbody>

@endforeach
