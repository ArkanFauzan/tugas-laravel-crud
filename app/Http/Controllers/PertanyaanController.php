<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        return PertanyaanModel::get_all();
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request=$request->all();
        unset($request['_token']);
        return PertanyaanModel::store($request);
    }
}
