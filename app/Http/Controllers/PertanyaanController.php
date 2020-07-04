<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('index', compact('pertanyaan'));
    }

    public function create(){
        return view('create');
    }

    public function show_by_id($pertanyaan_id){
        $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);
        $jawaban = JawabanModel::get_all($pertanyaan_id);
        return view('pertanyaan_id',compact('pertanyaan','jawaban'));
    }

    public function store(Request $request){
        $request=$request->all();
        unset($request['_token']);
        $pertanyaan = PertanyaanModel::store($request);

        return redirect('/pertanyaan'); //redirect ke PertanyaanController@index
    }

    public function edit($pertanyaan_id){
        $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);
        return view('pertanyaan_edit',compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request){
        $request=$request->all();
        unset($request['_token'],$request['_method']);
        $pertanyaan = PertanyaanModel::update($pertanyaan_id,$request);

        return redirect('/pertanyaan');
    }

    public function destroy($pertanyaan_id){
        $delete = PertanyaanModel::destroy($pertanyaan_id);

        return redirect('/pertanyaan');
    }
}
