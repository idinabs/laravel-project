@if ($post->count())


<thead class="bg-light">
    <tr class="border-0">
        <th class="border-0">Image</th>
        <th class="border-0">To Do</th>
        <th class="border-0" style="padding-left: 80px;">Action</th>
        <th class="border-0" style="padding-right: 92px;">Status</th>
    </tr>
</thead>

    
@else
    
<thead class="bg-light">
    <tr class="border-6">
       <h2 style="text-align: center">
           Maaf tidak ada data yang bisa ditampilkan
       </h2>
    </tr>
</thead>

@endif