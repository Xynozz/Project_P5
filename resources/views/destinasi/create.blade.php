@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Destinasi
                    <a href="{{route('destinasi.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('destinasi.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Tempat</label>
                            <input type="text" class="form-control @error('nama_tempat') is invalid @enderror"
                                name="nama_tempat"></input>
                            @error("nama_tempat")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Harga Tiket</label>
                            <input type="text" class="form-control @error('harga') is invalid @enderror"
                                name="harga"></input>
                            @error("harga")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control @error('deskripsi') is invalid @enderror"
                                name="deskripsi"></textarea>
                            @error("deskripsi")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Image</label>
                            <input type="file" class="form-control @error('foto') is invalid @enderror"
                                name="foto"></input>
                            @error("foto")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $data)
                                <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Lokasi</label>
                            <select name="id_lokasi" class="form-control @error('id_lokasi') is-invalid @enderror">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($lokasi as $data)
                                <option value="{{$data->id}}">{{$data->nama_lokasi}}</option>
                                @endforeach
                            </select>
                            @error('id_lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Review</label>
                            <select name="id_review" class="form-control @error('id_review') is-invalid @enderror">
                                <option value="">Pilih Username</option>
                                @foreach ($review as $data)
                                <option value="{{$data->id}}">{{$data->username}}</option>
                                @endforeach
                            </select>
                            @error('id_review')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
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
