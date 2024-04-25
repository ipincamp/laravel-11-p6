<?php

namespace App\Http\Controllers;

use App\Models\JadwalMataKuliah;
use Illuminate\Http\Request;

class JadwalMataKuliahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JadwalMataKuliah::all();

        return view('penjadwalan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new JadwalMataKuliah();

        $data->hari = $request->hari;
        $data->mata_kuliah = $request->matkul;
        $data->waktu_mulai = $request->mulai;
        $data->waktu_selesai = $request->selesai;
        $data->ruang = $request->ruang;
        $data->dosen_pengampu = $request->dosen;
        $data->jumlah_mahasiswa = (int)$request->jumlah;

        $data->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalMataKuliah $jadwalMataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalMataKuliah $jadwalMataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = JadwalMataKuliah::where('id', $id);
        $data->update([
            'waktu_mulai' => $request->mulai,
            'waktu_selesai' => $request->selesai,
            'ruang' => $request->ruang,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalMataKuliah::where('id', $id)->delete();

        return back();
    }
}
