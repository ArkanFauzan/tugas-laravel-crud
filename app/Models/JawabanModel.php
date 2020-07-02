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

        $pertanyaan = DB::table('pertanyaan')
                        ->where('id','=',$pertanyaan_id)
                        ->get();

        return view('jawaban',['jawaban'=>$jawaban->all(),'pertanyaan'=>$pertanyaan->all()]);
    }

    public static function store($request){
        DB::table('jawaban')->insert($request);

        return JawabanModel::get_all($request['pertanyaan_id']);
    }
}