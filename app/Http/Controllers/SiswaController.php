<?php

namespace App\Http\Controllers;
use App\Models\Siswa;


use Illuminate\Http\Request;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::select('nama', 'nomor_induk_siswa', 'kelas','nama_ibu', 'status')->get();
        return view('siswa', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nomor_induk_siswa' => 'required|unique:siswas',
        'jenis_kelamin' => 'required',
        'kelas' => 'required',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required',
        'nama_ibu' => 'required',
        'nama_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'penghasilan_ayah' => 'required|numeric',
        'penghasilan_ibu' => 'required|numeric',
        'hp_ayah' => 'required',
        'hp_ibu' => 'required',
        'status' => 'required',
    ]);

    Siswa::create($request->all());

    return redirect()->route('siswa')->with('success', 'Data siswa berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
