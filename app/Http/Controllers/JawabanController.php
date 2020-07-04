<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
        $jawaban = JawabanModel::get_all($pertanyaan_id);
        $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);

        return view('jawaban',compact('jawaban','pertanyaan'));
    }

    public function store($pertanyaan_id, Request $request){
        $request = $request->all();
        unset($request['_token']);
        $request['pertanyaan_id']=$pertanyaan_id;
        $jawaban = JawabanModel::store($request);

        return redirect("/jawaban/$pertanyaan_id"); // redirect ke JawabanController@index
    }

}
