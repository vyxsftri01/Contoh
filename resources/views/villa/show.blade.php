@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       Data transaksi
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Pemesan</label>
                            <input type="text" class="form-control " name="id_pemesan" value="{{ $transaksi->id_pemesan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total</label>
                            <input type="text" class="form-control " name="totsl" value="{{ $transaksi->totsl }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('transaksi.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection