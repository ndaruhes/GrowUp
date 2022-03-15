@extends('layouts.dashboard')

@section('title', 'Profile | GrowUp')


@section('dashboard_content')
    <div class="section-title">
        <h1><i class="uil uil-user me-1"></i>Your Profile</h1>
        <div class="line"></div>
    </div>
    <div class="user-info">
        <span class="title"><i class="uil uil-user me-1"></i>Full Name</span>
        <span class="value">{{ Auth::user()->name }}</span>
    </div>
    <div class="user-info">
        <span class="title"><i class="uil uil-envelope me-1"></i>E-Mail Address</span>
        <span class="value">{{ Auth::user()->email }}</span>
    </div>
    <div class="user-info">
        <span class="title"><i class="uil uil-user-md me-1"></i>User Role</span>
        <span class="value">{{ Auth::user()->role }}</span>
    </div>
    <div class="user-info">
        <span class="title"><i class="uil uil-calendar-alt me-1"></i>Registered</span>
        <span class="value">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('M d, Y') }}</span>
    </div>
@endsection
