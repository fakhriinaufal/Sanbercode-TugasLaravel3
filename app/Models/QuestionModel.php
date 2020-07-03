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

    public static function get_by_id($id)
    {
        $item = DB::table('questions')
                ->where('id', $id)
                ->get();
        return $item;
    }

    public static function update($id, $request)
    {
        $item = DB::table('questions')
                ->where('id', $id)
                ->update([
                    'profile_id' => $request['profile_id'],
                    'judul' => $request['judul'],
                    'isi' => $request['judul']
                ]);
        return $item;
    }

    public static function delete($id)
    {
        $item = DB::table('questions')
                ->where('id', $id)
                ->delete();
        return $item;
    }
}
