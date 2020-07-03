<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;

class JawabanController extends Controller
{
    //
    public static function create()
    {
        return view('items.create-jawaban');
    }

    public static function index($pertanyaan_id)
    {
        $answer = AnswerModel::get_all($pertanyaan_id);
        return view('items.jawaban', compact('answer'));
    }
}
