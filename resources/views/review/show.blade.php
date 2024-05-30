@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Review
                    <a href="{{route('review.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Username</label>
                        <b>{{$review->username}}</b>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Komentar</label>
                        <b>{{$review->coment}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
