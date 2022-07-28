@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Pemesanan
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
                        <form action="{{ route('pemesanan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jumlah pesanan</label>
                                <input type="text" class="form-control  @error('jumlah') is-invalid @enderror"
                                    name="jumlah">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('pemesanan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Lama sewa</label>
                                <input type="text" class="form-control  @error('lamas') is-invalid @enderror"
                                    name="lamas">
                                @error('lamas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('pemesanan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal masuk</label>
                                <input type="text" class="form-control  @error('tgl_masuk') is-invalid @enderror"
                                    name="tgl_masuk">
                                @error('tgl_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal keluar </label>
                                <input type="text" class="form-control  @error('tgl_keluar') is-invalid @enderror"
                                    name="tgl_keluar">
                                @error('tgl_keluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Villa </label>
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