@extends('layouts.layout')
@section('content')
<div class="row mt-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 mt-4">
            <div class="card-body mt-n5 px-3">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3">
                    <div class="chart">
                        {{-- <img src="{{ asset('images/destinasi/' . $destinasi->foto) }}" alt=""> --}}
                    </div>
                </div>
                <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
                <p class="text-sm ms-2"> (<span class="font-weight-bolder">+11%</span>) than last week </p>
                <div class="container border-radius-lg">
                    <div class="row">
                        <div class="col-3 py-3 ps-0">
                            <div class="d-flex mb-2">
                                <div
                                    class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">groups</i>
                                </div>
                                <p class="text-xs my-auto font-weight-bold">Users</p>
                            </div>
                            <h4 class="font-weight-bolder">42K</h4>
                            <div class="progress w-75">
                                <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 py-3 ps-0">
                            <div class="d-flex mb-2">
                                <div
                                    class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">ads_click</i>
                                </div>
                                <p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
                            </div>
                            <h4 class="font-weight-bolder">1.7m</h4>
                            <div class="progress w-75">
                                <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 py-3 ps-0">
                            <div class="d-flex mb-2">
                                <div
                                    class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">receipt</i>
                                </div>
                                <p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
                            </div>
                            <h4 class="font-weight-bolder">399$</h4>
                            <div class="progress w-75">
                                <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-3 py-3 ps-0">
                            <div class="d-flex mb-2">
                                <div
                                    class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">category</i>
                                </div>
                                <p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
                            </div>
                            <h4 class="font-weight-bolder">74</h4>
                            <div class="progress w-75">
                                <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-7">
        <div class="card z-index-2">
            <div class="card-header pb-0">
                <h6>Sales overview</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-up text-success"></i>
                    <span class="font-weight-bold">4% more</span> in 2021
                </p>
            </div>
            <div class="card-body p-3">
                <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
            </div>
        </div>

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
