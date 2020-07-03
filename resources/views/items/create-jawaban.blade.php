@extends('utama.master')

@section('content')
    <form action="/jawaban/{{$pertanyaan_id}}" method="POST">
        @csrf
        <form>
            <div class="form-group">
                <label for="judul">Question Id</label>
            <input type="text" class="form-control" id="question_id" name="question_id" value="{{$pertanyaan_id}}" readonly>
            </div>
            <div class="form-group">
              <label for="profile_id">Profile Id</label>
              <input type="text" class="form-control" id="profile_id" name="profile_id" placeholder="Masukkan Profile Id-mu">
            </div>
            <div class="form-group">
                <label for="isi">Isi Jawaban</label>
                <textarea class="form-control" id="isi" name="isi" placeholder="Masukkan rincian pertanyaan ..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Jawab</button>
          </form>
    </form>
@endsection
