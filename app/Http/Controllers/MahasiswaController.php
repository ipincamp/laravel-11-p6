<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
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
        $data = Mahasiswa::all();

        return view('mahasiswa.index', compact('data'));
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
        $data = new Mahasiswa();

        $data->nim = (int)$request->nim;
        $data->nama = $request->nama;
        $data->angkatan = (int)$request->angkatan;
        $data->prodi = $request->prodi;
        $data->fakultas = $request->fakultas;

        $data->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $data = Mahasiswa::where('nim', $nim);
        $data->update($request->only(['nama', 'angkatan', 'prodi', 'fakultas']));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        Mahasiswa::where('nim', $nim)->delete();

        return back();
    }
}
