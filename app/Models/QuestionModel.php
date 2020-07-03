<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionModel
{
    public static function get_all()
    {
        $question = DB::table('questions')->get();
        return $question;
    }

    public static function save($data)
    {
        $new_item = DB::table('questions')->insert($data);
        return $new_item;
    }
}
