<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unitkerja;

class UnitkerjaController extends Controller
{
    //

    public function show(){
        $list_unitkerja = unitkerja::all();
        return view('unitkerja.show', ['list_unitkerja'=>$list_unitkerja]);
    }
}
