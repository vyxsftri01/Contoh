@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data villa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('villa.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jenis villa</label>
                                <input type="text" class="form-control  @error('jenis_villa') is-invalid @enderror"
                                    name="jenis_villa">
                                @error('jenis_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="card-body">
                        <form action="{{ route('villa.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Harga/malam</label>
                                <input type="text" class="form-control  @error('villa') is-invalid @enderror"
                                    name="villa">
                                @error('villa')
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