@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       Data pemesanan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Identitas</label>
                            <input type="text" class="form-control " name="nama" value="{{ $pemesanan->iid_identitas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah pemesan</label>
                            <input type="text" class="form-control " name="jumlah" value="{{ $pemesanan->jumlah }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lama sewa</label>
                            <input type="text" class="form-control " name="lamas" value="{{ $pemesanan->lamas }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal masuk</label>
                            <input type="text" class="form-control " name="tgl_masuk" value="{{ $pemesanan->tgl_masuk }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal keluar</label>
                            <input type="text" class="form-control" name="tgl_keluar" value="{{ $pemesanan->tgl_keluar }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Villa</label>
                            <input type="text" class="form-control" name="id_villa" value="{{ $pemesanan->id_villa }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('pemesanan.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection