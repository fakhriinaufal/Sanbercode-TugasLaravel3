<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class PertanyaanController extends Controller
{
    public static function index()
    {
        $question = QuestionModel::get_all();
        // dd($question);
        return view('items.pertanyaan', compact('question'));
    }

    public static function create()
    {
        return view('items.create-pertanyaan');
    }

    public static function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $item = QuestionModel::save($data);
        if ($item == true)
        {
            return redirect('/pertanyaan');
        }
    }
}
