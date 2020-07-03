@extends('utama.master')
@section('content')
<a href="/pertanyaan/create" class="btn btn-primary my-2">Ajukan Pertanyaan</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pertanyaan</th>
            <th scope="col">Profile Id</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi Pertanyaan</th>
            <th scope="col">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($question as $key => $item)
        <tr>
            <td scope="row">{{ $key + 1 }}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->profile_id}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td><a href="jawaban/create/new/{{$item->id}}" class="btn btn-success">Jawab</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
