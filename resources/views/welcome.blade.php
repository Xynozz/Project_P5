@extends('layouts.layout')
@section('content')
<div class="row mt-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
        @foreach ($destinasi as $item)
        <div class="card z-index-2 mt-4 py-3">
            <div class="card-body mt-n5 px-3">
                <div class="">
                    <img src="{{asset('images/destinasi/' . $item->foto) }}" alt="" style="width: 400px" >
                </div>
                <a href="/destinasi/{{$item->id}}">
                    <h4 class="">{{$item->nama_tempat}}</h4>
                </a>
                <div class="container border-radius-lg">
                    <div class="row">
                        <div class="col-3 py-3">
                                <label for="">Kategories :</label>
                                <h5>{{$item->kategori->nama_kategori}}</h5>
                        </div>
                        <div class="col-5 py-3">
                            <label for="">Lokasi :</label>
                            <h5>{{$item->lokasi->nama_lokasi}}</h5>
                        </div>
                        <div class="col-4 py-3">
                            <label for="">Harga Tiket :</label>
                            <h5>{{$item->harga}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @foreach ($destinasi as $item)
    <div class="col-lg-6 mt-4 py-3">
        <div class="card z-index-2">
            <div class="card-header pb-0">
                <h6>{{$item->review->username}}</h6>
            </div>
            <div class="card-body p-3">
                <div class="chart">
                    <label for="">Pesan :</label>
                    <p>{{$item->review->coment}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
            <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
        </div>
    </div>
</div>
@endsection
