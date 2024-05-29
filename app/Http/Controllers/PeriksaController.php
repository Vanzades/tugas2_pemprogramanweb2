<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;

class PeriksaController extends Controller
{
    //

    public function show(){
        $list_periksa = Periksa::all();
        return view('periksa.show', ['list_periksa'=>$list_periksa]);
    }
}
