<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use Illuminate\Support\Facades\Storage;

class testController extends Controller
{
    public function read(){
        $data = SiswaModel::all(); //Ngambil data dari model,disini ngambil data semuanya jadi pake all kalo cuman 1 bisa pake get('parameter nya apa');
        return view('datasiswa', ['data' =>$data]);
    }

public function create(){
    return view('formDaftar');
}
//Save (Request)
public function store(Request $request){
    $siswa = SiswaModel::create([
        'nama'=>$request->nama,
        'umur'=>$request->umur,
        'alamat'=> $request->alamat,
        'nomor_telepon'=> $request->nomor_telepon,
        'email'=>$request->email 
    ]);
    return redirect('datasiswa');
}

public function edit($id)
{   // Fetch the student record using the provided ID
    $student = SiswaModel::find($id); 
    // Jika Siswa tidak ada
    if (!$student) {
        abort(404);
    }

    return view('formEdit', compact('student'));
}

public function update(Request $request, $id){
    $student = SiswaModel::find($id); // Find the student record to update
    // Update the student record with the new data
    $student->nama = $request->nama;
    $student->umur = $request->umur;
    $student->alamat = $request->alamat;
    $student->nomor_telepon = $request->nomor_telepon;
    $student->email = $request->email;
    $student->save(); // Save the updated data

    return redirect('datasiswa')->with('success', 'Data berhasil diubah!');
}


public function destroy($id)
{
    $student = SiswaModel::find($id);

    if (!$student) {
        return redirect()->back()->with('error', 'Student not found');
    }

    $student->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus!');
}
}