<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class monitorController extends Controller
{
    //menampilkan semua data (READ)

    public function index()
    {
        $data = Monitor::all(); //Ambil semua data dari model Monitor
        return view('monitor.index', ['data'=>$data]); //
    }

    //menampilkan form tambah proyek (CREATE)

    public function create()
    {
        return view('monitor.create');
    }

    //menyimpan proyek baru ke database 

    public function store(Request $request)
    {
        //validasi input
        $request->validate([
            'nama_proyek'=>'required',
            'client'=>'required',
            'kepala_proyek'=>'required',
            'tanggal_mulai'=>'required|date',
            'tanggal_selesai'=>'required|date',
            'kemajuan'=>'required'
        ]);

        //simpan ke database
        Monitor::create($request->all());//request = data yang dikirim user ke server

        //redirect ke halaman list project
        return redirect()->route('monitor.index');
    }

    //menampilkan form edit proyek
    public function edit($id)
    {
        $monitor = Monitor::find($id); // cari proyek berdasarkan id
        return view('monitor.edit', compact('monitor'));
    }

    //update project ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_proyek'=>'required',
            'client'=>'required',
            'kepala_proyek'=>'required',
            'tanggal_mulai'=>'required|date',
            'tanggal_selesai'=>'required|date',
            'kemajuan'=>'required'
        ]);

        //update data
        Monitor::find($id)->update($request->all());
        return redirect()->route('monitor.index');

    }

    //hapus project
    public function destroy($id)
    {
        Monitor::find($id)->delete();
        return redirect()->route('monitor.index');
    }


}
