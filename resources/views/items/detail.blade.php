@extends('utama.master');

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id Pertanyaan</th>
                <th>Profile Id</th>
                <th>Judul</th>
                <th>Isi Pertanyaan</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Diperbarui</th>
            </tr>
            <tbody>
                <tr>
                    <td>{{$question->id}}</td>
                    <td>{{$question->profile_id}}</td>
                    <td>{{$question->judul}}</td>
                    <td>Anu</td>
                    <td>anu2</td>
                </tr>
            </tbody>
        </thead>
    </table>
    <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Profile Id</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answers as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->profile_id}}</td>
                <td>{{$item->isi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
