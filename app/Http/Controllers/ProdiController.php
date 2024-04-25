<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::all();

        return view('prodi.index', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prodi = new Prodi();
        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;

        $prodi->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode)
    {
        $prodi = Prodi::where('kode', $kode);
        $prodi->update([
            'nama' => $request->nama
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode)
    {
        $prodi = Prodi::where('kode', $kode);
        $prodi->delete();

        return back();
    }
}
