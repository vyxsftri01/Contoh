<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
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
        //
        $pemesanan = pemesanan::all();
        return view('pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pemesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'id_identitas' => 'required',
            'jumlah' => 'required|unique:identitas|max:255',
            'lamas' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'id_villa' => 'required',
        ]);

        $pemesanan = new pemesanan();
        $pemesanan->id_identitas = $request->identitas;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->lamas = $request->lamas;
        $pemesanan->tgl_masuk = $request->tgl_masuk;
        $pemesanan->tgl_keluar = $request->tgl_keluar;
        $pemesanan->id_villa = $request->id_villa;
        $pemesanan->save();
        return redirect()->route('pemesanan.index')
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
        //
        $pemesanan = pemesanan::findOrFail($id);
        return view('pemesanan.show', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pemesanan = pemesanan::findOrFail($id);
        return view('pemesanan.edit', compact('pemesanan'));
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
        //
        $validated = $request->validate([
            'id_identitas' => 'required',
            'jumlah' => 'required|unique:identitas|max:255',
            'lamas' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'id_villa' => 'required',
        ]);

        $pemesanan = new pemesanan();
        $pemesanan->id_identitas = $request->identitas;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->lamas = $request->lamas;
        $pemesanan->tgl_masuk = $request->tgl_masuk;
        $pemesanan->tgl_keluar = $request->tgl_keluar;
        $pemesanan->id_villa = $request->id_villa;
        $pemesanan->save();
        return redirect()->route('pemesanan.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pemesanan = pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect()->route('pemesanan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
