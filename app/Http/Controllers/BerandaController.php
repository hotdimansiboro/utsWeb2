<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{ 
    public function index()
    {
        $page_title = "Tugas UTS";

        $mahasiswa = Mahasiswa::get();

        

        return view('beranda.index', compact('page_title', 'mahasiswa'));
    }

    public function create()
    {
        $page_title = "Create Mahasiswa";

        
        return view('beranda.create', compact('page_title'));
    }

    public function edit($id)
    {
        $page_title = "Edit Mahasiswa";

        $mahasiswa = Mahasiswa::findOrFail($id);

        
        return view('beranda.edit', compact('page_title', 'mahasiswa'));
    }

    public function store (Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'npm' => 'required|digits:11|numeric',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'angkatan' => 'required|integer',
        ]);

        $mahasiswa = new Mahasiswa();

        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama_lengkap = $request->nama_lengkap;
        $mahasiswa->email = $request->email;
        $mahasiswa->angkatan = $request->angkatan;

        $mahasiswa->save();

        return redirect('/')->with('success', 'Data berhasil disimpan');
    }

    public function update (Request $request, $id)
    {
        // dd($request->all());

        $validated = $request->validate([
           'npm' => 'required|digits:11|numeric',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'angkatan' => 'required|integer',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama_lengkap = $request->nama_lengkap;
        $mahasiswa->email = $request->email;
        $mahasiswa->angkatan = $request->angkatan;

        $mahasiswa->save();


        return redirect('/')->with('success', 'Data berhasil disimpan');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        
        return redirect('/')->with([
        'toast_success' => 'mahsiswa Has Been Deleted',
        ]);
    }
}
