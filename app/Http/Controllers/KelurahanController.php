<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelurahan;

class KelurahanController extends Controller
{
    //

    public function show(){
        $list_kelurahan = kelurahan::all();
        return view('kelurahan.show', ['list_kelurahan'=>$list_kelurahan]);
    }
}
