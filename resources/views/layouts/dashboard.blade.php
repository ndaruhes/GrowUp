@extends('layouts.app')
@section('title', 'Dashboard | GrowUp')

@section('content')
    {{-- URL PATH --}}
    @php $currURL = explode('/', Request::path()); @endphp

    {{-- BANNER --}}
    @include('layouts.banner')

    <div class="container">
        {{-- DASHBOARD MENU --}}
        <div class="dashboard-menu">
            <div class="dashboard-menu-panel">
                <a href="{{ Auth::user()->role == 'Mentor' ? url('mentor/courses') : url('member/courses') }}"
                    class="btn bg-outline-green btn-sm"><i class="uil uil-notebooks me-1"></i>My Courses
                </a>
                <a href="/profile" class="btn bg-outline-green btn-sm"><i class="uil uil-user-md me-1"></i>Profile
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
