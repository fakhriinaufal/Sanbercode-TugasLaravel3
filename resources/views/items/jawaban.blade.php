@extends('utama.master')

@section('content')
{{-- {{dd($answer)}} --}}
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pertanyaan</th>
            <th scope="col">Profile Id</th>
            <th scope="col">Jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($answer as $key => $item)
        <tr>
            <td scope="row">{{ $key + 1 }}</td>
            <td>{{$item->question_id}}</td>
            <td>{{$item->profile_id}}</td>
            <td>{{$item->isi}}</td>
        @endforeach
        </tr>
    </tbody>
</table>
@endsection
