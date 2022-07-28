<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
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
        $riwayat = riwayat::all();
        return view('riwayat.index', compact('riwayat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('riwayat.create');

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
            'id_pemesanan' => 'required|unique:identitas|max:255',
            'transaksi' => 'required',
            'id_villa' => 'required',
        ]);

        $riwayat = new riwayat();
        $riwayat->id_identitas = $request->identitas;
        $riwayat->id_pemesanan = $request->pemesanan;
        $riwayat->transaksi = $request->transaksi;
        $riwayat->id_villa = $request->villa;
        $riwayat->save();
        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function show(riwayat $riwayat)
    {
        //
        $riwayat = riwayat::findOrFail($id);
        return view('riwayat.show', compact('riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function edit(riwayat $riwayat)
    {
        //
        $riwayat = riwayat::findOrFail($id);
        return view('riwayat.edit', compact('riwayat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, riwayat $riwayat)
    {
        //
        $validated = $request->validate([
            'id_identitas' => 'required',
            'id_pemesanan' => 'required|unique:identitas|max:255',
            'transaksi' => 'required',
            'id_villa' => 'required',
        ]);

        $riwayat = new riwayat();
        $riwayat->id_identitas = $request->identitas;
        $riwayat->id_pemesanan = $request->pemesanan;
        $riwayat->transaksi = $request->transaksi;
        $riwayat->id_villa = $request->villa;
        $riwayat->save();
        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function destroy(riwayat $riwayat)
    {
        //
        $riwayat = riwayat::findOrFail($id);
        $riwayat->delete();
        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
