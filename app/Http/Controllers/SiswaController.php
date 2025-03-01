<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa;

class SiswaController extends Controller
{
    public function index(){
        $siswa = data_siswa::all();
        return view('siswa', compact('siswa'));
    }

    public function add(){
        return view('tambahdata');
    }

    public function store(Request $request){
        $request->validate([
            'nama' =>'required',
            'alamat' =>'required',
            'jenis_kelamin' =>'required',
            'sekolah' =>'required',

        ], [
            'nama.required' => 'Nama siswa harus diisi',
            'alamat.required' => 'Alamat siswa harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin siswa harus diisi',
           'sekolah.required' => 'Sekolah siswa harus diisi',
        ]);

        data_siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy($id){
        // menemukan data siswa
        $data = data_siswa::find($id);
        // data yang sudah dipilih akan di hapus sesuai fungsi delete
        $data->delete();
        return redirect()->route('siswa.index');
    }

    public function edit($id){
        $siswa = data_siswa::find($id);
        return view('editdata', compact('siswa'));
    }

    public function update(Request $request, $id){
        $siswa = data_siswa::findOrFail($id);

        $request->validate([
            'nama' =>'required',
            'alamat' =>'required',
            'jenis_kelamin' =>'required',
            'sekolah' =>'required',

        ], [
            'nama.required' => 'Nama siswa harus diisi',
            'alamat.required' => 'Alamat siswa harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin siswa harus diisi',
            'sekolah.required' => 'Sekolah siswa harus diisi',
        ]);

        $siswa -> update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'sekolah' => $request->sekolah
        ]);

        return redirect()->route('siswa.index');

    }

}
