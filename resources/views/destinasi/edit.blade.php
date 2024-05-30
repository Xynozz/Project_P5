@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Koperasi
                    <a href="{{route('destinasi.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('destinasi.update', $destinasi->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="">Nama Tempat</label>
                            <input type="text" class="form-control @error('nama_tempat') is invalid @enderror"
                                name="nama_tempat" value="{{ old('nama_tempat', $destinasi->nama_tempat) }}"></input>
                            @error("nama_tempat")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="text" class="form-control @error('harga') is invalid @enderror" name="harga"
                                value="{{ old('harga', $destinasi->harga) }}"></input>
                            @error("harga")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control @error('deskripsi') is invalid @enderror"
                                name="deskripsi" value="{{ old('deskripsi', $destinasi->deskripsi) }}"></textarea>
                            @error("deskripsi")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="foto">Dokumentasi</label>
                            @if($destinasi->foto)
                            <p><img src="{{ asset('images/destinasi/' . $destinasi->foto) }}" alt="foto" width="500px"></p>
                            @endif
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="id_lokasi">Lokasi</label>
                            <select name="id_lokasi" class="form-control @error('id_lokasi') is-invalid @enderror">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($lokasi as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $destinasi->id_lokasi ? 'selected' : ''
                                    }}>{{ $data->nama_lokasi }}</option>
                                @endforeach
                            </select>
                            @error('id_lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="id_kategori">Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $destinasi->id_kategori ? 'selected' : ''
                                    }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
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
