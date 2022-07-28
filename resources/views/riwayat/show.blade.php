@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       Data riwayat
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Identitas</label>
                            <input type="text" class="form-control " name="nama" value="{{ $riwayat->id_identitas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pemesan</label>
                            <input type="text" class="form-control " name="id_pemesan" value="{{ $riwayat->id_pemesan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Transaksi</label>
                            <input type="text" class="form-control " name="transaksi" value="{{ $riwayat->transaksi }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Villa</label>
                            <input type="text" class="form-control" name="id_villa" value="{{ $riwayat->id_villa }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('riwayat.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection