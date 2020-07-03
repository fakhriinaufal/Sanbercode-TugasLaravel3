@extends('utama.master')

@section('content')
    <form action="/pertanyaan" method="POST">
        @csrf
        <form>
            <div class="form-group">
              <label for="profile_id">Profile Id</label>
              <input type="text" class="form-control" id="profile_id" name="profile_id" placeholder="Masukkan Profile Id-mu">
            </div>
            <div class="form-group">
                <label for="judul">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul pertanyaan ...">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" id="isi" name="isi" placeholder="Masukkan rincian pertanyaan ..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tanya</button>
          </form>
    </form>
@endsection
