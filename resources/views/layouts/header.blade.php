<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="">
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="{{route('genre.index')}}">Genre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('penulis.index')}}">Penulis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('buku.index')}}">Buku</a>
                </li>
            </ul>
            @guest
            <a href="{{url('login')}}" class="btn btn-outline-success">Login</a>
            <a href="{{url('register')}}" class="btn btn-outline-success">Register</a>
            @else
            <ul class="list-unstyled">
                <li>
                    <h3>{{Auth::user()->name}}</h3>
                </li>
                <li>
                    <a href="{{url('logout')}}" class="btn btn-outline-primary" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                </li>
                {{-- form Untuk Logout --}}

                <form action="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
                </form>
            </ul>
            @endguest
            </form>
        </div>
    </div>
</nav>
