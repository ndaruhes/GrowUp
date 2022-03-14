@extends('dashboard')

@section('title', 'Courses | GrowUp')

@section('dashboard_content')
    {{-- ADD COURSE MODAL --}}
    @include('courses.create')

    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-notebooks"></i>
            My Courses
        </h1>
        <div class="line"></div>
        <button class="btn btn-dark btn-sm add-btn" data-bs-toggle="modal" data-bs-target="#addModal">Tambah<i
                class="uil uil-plus ms-1"></i></button>
    </div>

    {{-- CONTENT --}}
@endsection
