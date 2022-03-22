@php $user = Auth::user(); @endphp
@extends('layouts.dashboard')

@section('title', 'Dashboard ' . $user->role . ' | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/user_home.css') }}">
@endsection

@section('dashboard_content')
    {{-- HOME DASHBOARD MENTOR --}}
    @if ($user->role == 'Mentor')
        <div class="row">
            <div class="col-md-10 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-2 col-3">
                        <img src="{{ asset('/images/avatar.png') }}" alt="avatar.png"
                            class="w-100 shadow-sm rounded-circle">
                    </div>
                    <div class="col-md-10 col-9 p-0 modal-user-info">
                        <span class="fs-5">{{ $user->name }}</span>
                        <small class="badge bg-green">{{ $user->role }}</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Pendapatan</span>
                            <span class="subtitle price text-green">
                                Rp{{ number_format($salary) }}
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="{{ url(strtolower($user->role) . '/courses') }}" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Kelas</span>
                            <span class="subtitle">
                                {{ $courses->count() }} Kelas
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Mentee</span>
                            <span class="subtitle">
                                {{ $transactions->count() }} Mentee
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Forum</span>
                            <span class="subtitle">
                                20 Diskusi
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Rating Kelas</span>
                            <span class="subtitle">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="uis uis-star text-yellow"></i>
                                @endfor
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-10 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-2 col-3">
                        <img src="{{ asset('/images/avatar.png') }}" alt="avatar.png"
                            class="w-100 shadow-sm rounded-circle">
                    </div>
                    <div class="col-md-10 col-9 p-0 modal-user-info">
                        <span class="fs-5">{{ $user->name }}</span>
                        <small class="badge bg-green">{{ $user->role }}</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="{{ url(strtolower($user->role) . '/courses') }}" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Kelas</span>
                            <span class="subtitle">
                                {{ $transactions->count() }} Kelas
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Mentor</span>
                            <span class="subtitle">
                                {{ $transactions->count() }} Mentor
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 item">
                <a href="#" class="col-md-12 item-content">
                    <div class="row align-items-center">
                        <div class="col-4 icon">
                            <img src="{{ asset('images/courses-icon/graphic-design.png') }}" class="w-100"
                                alt="icon">
                        </div>
                        <div class="col-8 text">
                            <span class="title">Total Forum</span>
                            <span class="subtitle">
                                20 Diskusi
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endif
@endsection
