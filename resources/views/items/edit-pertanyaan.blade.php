@extends('utama.master')

@section('content')
<form action="/pertanyaan/{{$question->id}}" method="POST">
    @csrf
    @method('PUT')
    <form>
        <div class="form-group">
          <label for="profile_id">Profile Id</label>
          <input type="text" class="form-control" id="profile_id" name="profile_id" value="{{$question->profile_id}}">
        </div>
        <div class="form-group">
            <label for="judul">Judul Pertanyaan</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{$question->judul}}">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" id="isi" name="isi">{{$question->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
</form>
@endsection
