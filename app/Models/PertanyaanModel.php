<?php

namespace App\Models;
use Illuminate\support\Facades\DB;

class PertanyaanModel{

    public static function get_all(){
        $pertanyaan=DB::table('pertanyaan')->get();
        return view("index",['pertanyaan'=>$pertanyaan]);
    }

    public static function store($request){
        $pertanyaanBaru=DB::table('pertanyaan')->insert($request);
        $pertanyaan=DB::table('pertanyaan')->get();

        if ($pertanyaanBaru && $pertanyaan) {
            return view('index',['pertanyaan'=>$pertanyaan]);
        }
    }
}