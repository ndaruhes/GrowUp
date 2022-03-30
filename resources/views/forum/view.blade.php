@extends('layouts.app')

@section('title', 'Hubungi Kami | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection

@section('content')
    <div class="container content-container">
        {{-- <div class="row align-items-center">
            <div class="image-container">
                <img src="{{ asset('/images/avatar.png') }}" alt="avatar.png"
                    class="shadow-sm rounded-circle">
            </div>
            <div class="col-md-10 col-9 p-0 modal-user-info">
                <span>{{ Auth::user()->name }}</span>
                <small class="badge bg-green">{{ Auth::user()->role }}</small>
            </div>
        </div> --}}
    </div>
@endsection
