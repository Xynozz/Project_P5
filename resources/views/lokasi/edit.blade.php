@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Lokasi
                    <a href="{{route('lokasi.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('lokasi.update', $lokasi->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="">Nama Lokasi</label>
                            <input type="text" class="form-control @error('nama_lokasi') is invalid @enderror"
                                name="nama_lokasi"
                                value="{{ old('nama_lokasi', $lokasi->nama_lokasi) }}"></input>
                            @error("nama_lokasi")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
