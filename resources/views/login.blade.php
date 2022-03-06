@extends("layouts.app")

@section('title', 'Login | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/authenticationApp.css') }}">
@endsection


@section('content')
    {{-- AUTHENCATION NAVBAR --}}
    @include('layouts.authenticationNavbar')

    {{-- CONTENT --}}
    <h1>Halaman Home</h1>
@endsection
