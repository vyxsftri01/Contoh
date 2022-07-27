@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data identitas
                    </div>
                    <div class="mb-3">
                                <label class="form-label">Nomor identitas</label>
                                <input type="text" class="form-control  @error('no_pengguna') is-invalid @enderror"
                                    name="no_pengguna">
                                @error('no_pengguna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <div class="card-body">
                        <form action="{{ route('identitas.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('identitas.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror"
                                        type="radio" name="jk" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                    <input class="form-check-input @error('jk') is-invalid @enderror"
                                        type="radio" name="jk" value="Laki-laki">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('identitas.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                    name="tgl_lahir">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat"></textarea>
                                @error('alamat')
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