@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data transaksi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">pemesanan</label>
                                <input type="text" class="form-control  @error('id_pemesanan') is-invalid @enderror"
                                    name="id_pemesanan" value="{{ $transaksi->id_pemesanan }}">
                                @error('id-transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="mb-3">
                                <label class="form-label">Total Harga</label>
                                <input type="datextte" class="form-control  @error('total') is-invalid @enderror"
                                    name="total" value="{{ $transaksi->total }}">
                                @error('total')
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