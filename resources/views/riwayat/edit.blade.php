@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data riwayat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('riwayat.update', $riwayat->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Identitas</label>
                                <input type="text" class="form-control  @error('id_identitas') is-invalid @enderror"
                                    name="id_identitas" value="{{ $riwayat->id_identitas }}">
                                @error('id_identitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">pemesanan</label>
                                <input type="text" class="form-control  @error('id_pemesanan') is-invalid @enderror"
                                    name="id_pemesanan" value="{{ $riwayat->id_pemesanan }}">
                                @error('id-riwayat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="mb-3">
                                <label class="form-label">Transaksi</label>
                                <input type="datextte" class="form-control  @error('transaksi') is-invalid @enderror"
                                    name="transaksi" value="{{ $riwayat->transaksi }}">
                                @error('transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Villa</label>
                                <input type="datextte" class="form-control  @error('id_villa') is-invalid @enderror"
                                    name="id_villa" value="{{ $riwayat->id_villa }}">
                                @error('id_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection