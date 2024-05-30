{{-- <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">

    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <h4 class="ms-1 font-weight-bold text-white">Wisata</h4>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    @guest
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{url('login')}}">

                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>

                    <span class="nav-link-text ms-1">Login</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="{{url('register')}}">

                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>

                    <span class="nav-link-text ms-1">Register</span>
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white " href="{{url('home')}}">

                    <i class="bi bi-house-door"></i>

                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('kategori.index')}}">

                    <i class="bi bi-card-list"></i>

                    <span class="nav-link-text ms-1">Kategories</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('lokasi.index')}}">

                    <i class="bi bi-geo-alt"></i>

                    <span class="nav-link-text ms-1">Location</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('destinasi.index')}}">

                    <i class="bi bi-map"></i>

                    <span class="nav-link-text ms-1">Destination</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('review.index')}}">
                    <i class="bi bi-star"></i>
                    <span class="nav-link-text ms-1">Review</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <hr class="horizontal light mt-0 mb-2">
            <li class="nav-item">
                <a class="nav-link text-white " href="./profile.html">
                    <i class="bi bi-person"></i>
                    <span class="nav-link-text ms-1">{{Auth::user()->name}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('logout')}}">
                    <a href="{{url('logout')}}" class="nav-link text-white" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{route('logout')}}" method="post" id="logout-form">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </div>
    @endguest

</aside> --}}
