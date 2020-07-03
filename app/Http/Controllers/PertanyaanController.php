<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;

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

    public static function detail($id)
    {
        $question = QuestionModel::get_by_id($id)[0];
        $answers = AnswerModel::get_all($id);
        return view('items.detail', compact(['question', 'answers']));
    }

    public static function edit($id)
    {
        $question = QuestionModel::get_by_id($id)[0];
        return view('items.edit-pertanyaan', compact('question'));
    }

    public static function update($id, Request $request)
    {
        $item = QuestionModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public static function delete($id)
    {
        $item = QuestionModel::delete($id);
        return redirect('/pertanyaan');
    }
}
