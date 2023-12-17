<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
class SiswaController extends Controller
{
    
    public function read(){
        $data = SiswaModel::all(); //Ngambil data dari model,disini ngambil data semuanya jadi pake all kalo cuman 1 bisa pake get('parameter nya apa');
        return view('datasiswa', ['data' =>$data]);
    }
}
