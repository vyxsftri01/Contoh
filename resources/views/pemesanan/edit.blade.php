@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data pemesanan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Identitas</label>
                                <input type="text" class="form-control  @error('id_identitas') is-invalid @enderror"
                                    name="id_identitas" value="{{ $pemesanan->id_identitas }}">
                                @error('id_identitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah pemesanan</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ $pemesanan->alamat }}">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="mb-3">
                                <label class="form-label"> Lama sewa</label>
                                <input type="datextte" class="form-control  @error('lamas') is-invalid @enderror"
                                    name="lamas" value="{{ $pemesanan->lamas }}">
                                @error('lamas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Tanggal masuk</label>
                                <input type="datextte" class="form-control  @error('tgl_masuk') is-invalid @enderror"
                                    name="tgl_masuk" value="{{ $pemesanan->tgl_masuk }}">
                                @error('tgl_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Tanggal keluar</label>
                                <input type="datextte" class="form-control  @error('tgl_keluar') is-invalid @enderror"
                                    name="tgl_keluar" value="{{ $pemesanan->tgl_keluar }}">
                                @error('tgl_keluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Villa</label>
                                <input type="datextte" class="form-control  @error('id_villa') is-invalid @enderror"
                                    name="id_villa" value="{{ $pemesanan->id_villa }}">
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