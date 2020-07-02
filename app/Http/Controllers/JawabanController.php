<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
        return JawabanModel::get_all($pertanyaan_id);
    }

    public function store($pertanyaan_id, Request $request){
        $request = $request->all();
        unset($request['_token']);

        $request['pertanyaan_id']=$pertanyaan_id;

        return JawabanModel::store($request);
    }
}
