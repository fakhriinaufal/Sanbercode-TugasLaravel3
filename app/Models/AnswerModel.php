<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AnswerModel
{
    public static function get_all($pertanyaan_id)
    {
        $pertanyaan_id = (int)$pertanyaan_id;
        $answer = DB::table('answers')->where('question_id', $pertanyaan_id)->get();
        return $answer;
    }

    public static function save($data)
    {
        $new_item = DB::table('answers')->insert($data);
        return $new_item;
    }
}
