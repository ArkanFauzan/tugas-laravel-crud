<?php

namespace App\Models;
use Illuminate\support\Facades\DB;

class PertanyaanModel{

    public static function get_all(){
        $pertanyaan=DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function find_by_id($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')
                        ->where('id','=',$pertanyaan_id)
                        ->first();
        return $pertanyaan;
    }

    public static function store($request){
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-j H:i:s");

        $request["created_at"] = $time;
        $request["updated_at"] = $time;

        $pertanyaanBaru=DB::table('pertanyaan')->insert([$request]);
        return $pertanyaanBaru;
    }

    public static function update($pertanyaan_id,$request){
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-j H:i:s");
        $request["updated_at"] = $time;

        $update_pertanyaan = DB::table('pertanyaan')->where('id',$pertanyaan_id)->update($request);
        return $update_pertanyaan;
    }

    public static function destroy($pertanyaan_id){
        $delete = DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
        return $delete;
    }
}