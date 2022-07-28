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
                    <div class="mb-3">
                                <label class="form-label">identitas</label>
                                <input type="text" class="form-control  @error('id_identitas') is-invalid @enderror"
                                    name="id_identitas">
                                @error('id_identitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <div class="card-body">
                        <form action="{{ route('riwayat.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Pemesanan</label>
                                <input type="text" class="form-control  @error('id_pemesanan') is-invalid @enderror"
                                    name="id_pemesanan">
                                @error('id_pemesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('riwayat.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Rincian transaksi</label>
                                <input type="text" class="form-control  @error('transaksi') is-invalid @enderror"
                                    name="transaksi">
                                @error('transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('riwayat.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Villa</label>
                                <input type="text" class="form-control  @error('id_villa') is-invalid @enderror"
                                    name="id_villa">
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