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
                    <div class="mb-2">
                        <label for="">Nama Kategori</label>
                        <b>{{$lokasi->nama_lokasi}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
