<?php

namespace App\Http\Controllers;

use App\Models\identitas;
use Illuminate\Http\Request;

class identitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $identitas = identitas::all();
        return view('identitas.index', compact('identitas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required|unique:identitas|max:255',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
        ]);

        $identitas = new identitas();
        $identitas->nama = $request->nama;
        $identitas->alamat = $request->alamat;
        $identitas->tgl_lahir = $request->tgl_lahir;
        $identitas->jk = $request->jk;
        $identitas->no_tlp = $request->no_tlp;
        $identitas->no_ktp = $request->no_ktp;
        $identitas->save();
        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $identitas = identitas::findOrFail($id);
        return view('identitas.show', compact('identitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $identitas = identitas::findOrFail($id);
        return view('identitas.edit', compact('identitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'no_pengguna' => 'required|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
        ]);

        $identitas = identitas::findOrFail($id);
        $identitas->nama = $request->nama;
        $identitas->no_pengguna = $request->no_pengguna;
        $identitas->nama = $request->nama;
        $identitas->alamat = $request->alamat;
        $identitas->tgl_lahir = $request->tgl_lahir;
        $identitas->jk = $request->jk;
        $identitas->no_tlp = $request->no_tlp;
        $identitas->no_ktp = $request->no_ktp;
        $identitas->save();
        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identitas = identitas::findOrFail($id);
        $identitas->delete();
        return redirect()->route('identitas.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
