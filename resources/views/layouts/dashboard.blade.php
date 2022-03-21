@extends('layouts.app')
@section('title', 'Dashboard | GrowUp')

@section('content')
    {{-- URL PATH --}}
    @php
    $currURL = explode('/', Request::path());
    $user = Auth::user();
    @endphp

    {{-- BANNER --}}
    @include('layouts.banner')

    <div class="container">
        {{-- DASHBOARD MENU --}}
        <div class="dashboard-menu">
            <div class="dashboard-menu-panel">
                <a href="{{ $user->role == 'Mentor' ? url('mentor/courses') : url('mentee/courses') }}"
                    class="btn bg-outline-green btn-sm"><i
                        class="uil uil-notebooks me-1"></i>{{ $user->role == 'Mentor' ? 'Kelola Kelas' : 'Kelas Saya' }}
                </a>
                <a href="{{ $user->role == 'Mentor' ? url('mentor/forum') : url('mentee/forum') }}"
                    class="btn bg-outline-green btn-sm"><i class="uil uil-comments-alt me-1"></i>Forum Diskusi
                </a>
                <a href="/profile" class="btn bg-outline-green btn-sm"><i class="uil uil-user-circle me-1"></i>Profil
                </a>
            </div>
        </div>

        {{-- DASHBOARD CONTENT --}}
        <div class="row">
            <div class="col-md-7 content-left">
                @yield('dashboard_content')
            </div>
            <div class="col-md-5 content-right">
                <img src="{{ asset('images/dashboard.png') }}" alt="dashboard.png" class="w-100">
            </div>
        </div>
    </div>
@endsection
