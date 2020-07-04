<?php

namespace App\Models;
use Illuminate\support\Facades\DB;

class JawabanModel{

    public static function get_all($pertanyaan_id){

        $jawaban = DB::table('jawaban')
                    ->join('pertanyaan','pertanyaan.id','=','jawaban.pertanyaan_id')
                    ->where('pertanyaan.id','=',$pertanyaan_id)
                    ->select('jawaban.*')
                    ->get();

        return $jawaban;
    }

    public static function store($request){
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-j H:i:s");

        $request["created_at"] = $time;
        $request["updated_at"] = $time;

        $jawaban = DB::table('jawaban')->insert($request);

        return $jawaban;
    }
}