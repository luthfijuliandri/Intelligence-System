<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function viewmhs()
    {
        $siswa = mahasiswa::get();
        return view('mahasiswa.viewmhs' ,compact('siswa'));
    }

    public function addmhs()
    {
        return view('mahasiswa.addmhs');
    }
    public function submit(Request $request)
    {
        $siswa = new mahasiswa();
        $siswa-> nama = $request-> nama;
        $siswa-> npm = $request-> npm;
        $siswa-> jenis_kelamin = $request-> jenis_kelamin;
        $siswa-> alamat = $request-> alamat;
        $siswa-> hobi = $request-> hobi;
        $siswa-> nohp = $request-> nohp;

        $siswa-> save();

        return redirect()->route('viewmhs')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function editmhs($id)
    {
        $siswa = mahasiswa::find($id);
        return view('mahasiswa.editmhs',compact('siswa'));
    }

    public function updatemhs(Request $request ,$id)
    {
        $siswa = mahasiswa::find($id);
        $siswa-> nama = $request-> nama;
        $siswa-> npm = $request-> npm;
        $siswa-> jenis_kelamin = $request-> jenis_kelamin;
        $siswa-> alamat = $request-> alamat;
        $siswa-> hobi = $request-> hobi;
        $siswa-> nohp = $request-> nohp;

        $siswa-> update();

        return redirect()->route('viewmhs')->with('success', 'Mahasiswa berhasil diedit.');
    }

    public function deletemhs($id)
    {
        $siswa = mahasiswa::find($id);
        $siswa-> delete();

        return redirect()->route('viewmhs')->with('success', 'Mahasiswa berhasil dihapus.');
    }

    
}
