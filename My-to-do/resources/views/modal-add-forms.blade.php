<form action="/buat/" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Isi judul todo anda">
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Isi keterangan todo anda"></textarea>
    </div>
    @error('keterangan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button class="btn btn-primary">Simpan</button>
</form>