<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;

class JawabanController extends Controller
{
    //
    public static function create($pertanyaan_id)
    {
        return view('items.create-jawaban', compact('pertanyaan_id'));
    }

    public static function index($pertanyaan_id)
    {
        $answer = AnswerModel::get_all($pertanyaan_id);
        return view('items.jawaban', compact('answer'));
    }

    public static function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $item = AnswerModel::save($data);
        return redirect('jawaban/'.$request->question_id);
    }
}
