@php
$user = Auth::user();
@endphp
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="35">
            <span class="text-red">G</span>row<span class="text-green">U</span>p
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="uil uil-estate me-1"></i>Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="uil uil-lightbulb-alt me-1"></i>Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/explore') }}"><i class="uil uil-rocket me-1"></i>Eksplor
                        Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}"><i
                            class="uil uil-phone-volume me-1"></i>Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}"><i class="uil uil-user me-1"></i>Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-green signup-btn" href="{{ url('/register') }}">Daftar</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/avatar.png') }}" class="rounded-circle avatar shadow-sm"
                                alt="avatar">
                            {{ $user->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ $user->role == 'Mentee' ? url('/mentee') : url('/mentor') }}"><i
                                        class="uil uil-apps me-1"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="uil uil-sign-out-alt me-1"></i>Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
