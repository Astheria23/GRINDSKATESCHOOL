<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trial;
use Illuminate\Support\Facades\Storage;


class TrialController extends Controller
{
    public function read(){
        $data = trial::all(); //Ngambil data dari model,disini ngambil data semuanya jadi pake all kalo cuman 1 bisa pake get('parameter nya apa');
        return view('dataTrial', ['data' =>$data]);
    }
    public function create(){
        return view('trialDaftar');
    }
    //Save (Request)
public function store(Request $request){
    $siswa = trial::create([
        'nama'=>$request->nama,
        'umur'=>$request->umur,
        'jenis_kelamin'=>$request->jenis_kelamin,
        'alamat'=> $request->alamat,
        'nomor_telepon'=> $request->nomor_telepon,
        'email'=>$request->email ,
        'pasfoto'=>$request->file('pasfoto')->store('image','public')]);
    return redirect('home2')->with('success', 'Data berhasil dikirim, kamu akan dihubungi Maxiaml satu minggu kedepan');;
}
public function destroy($id)
{
    dd($id);
    $student = trial::find($id);
    if (!$student) {
        return redirect()->back()->with('error', 'Student not found');
    }
    $student->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus!');
}



}
