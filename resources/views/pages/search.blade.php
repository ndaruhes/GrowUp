@extends('layouts.app')

@section('title', 'Explore Courses | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endsection

@section('content')
    <div class="container wrapper">
        <div class="explore">
            <div class="explore-heading">
                <div class="title d-flex align-items-center">
                    <span>Eksplor Semua Kelas</span>
                    <img src="{{ asset('images/nerd.png') }}" alt="nerd.png">
                </div>
                <p class="description">Siap ambil bagian dan bersaing di industri 4.0? Ayo belajar dan tingkatkan
                    keterampilanmu bersama mentor berpengalaman GrowUp. Cari dan eksplor kelas kesukaanmu.</p>

                {{-- FORM SEARCH --}}
                <form action="{{ route('searchCourse') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('search') is-invalid @enderror" id="search"
                            name="search" placeholder="Cari kelas disini..." value="{{ old('search') }}">
                        <label for="search">Cari kelas disini...</label>
                    </div>
                </form>

                {{-- CATEGORIES MENU --}}
                <div class="categories-menu">
                    <div class="categories-menu-panel">
                        @foreach ($categories as $category)
                            <a href="#" class="btn bg-outline-green btn-sm">{{ $category->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- SEARCH RESULT --}}
            <div class="courses">
                <div class="category-title d-flex align-items-center">
                    <img src=" {{ asset('images/magnifier.png') }}" alt="magnifier.png">
                    <span>Hasil Pencarian</span>
                </div>
                @if ($searchedCourses->count() != 0)
                    <div class="row">
                        @foreach ($searchedCourses as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5 image">
                                            @if (explode('/', $courses->cover)[0] != 'https:')
                                                <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                    alt="{{ $courses->title }}" class="w-100">
                                            @else
                                                <img src="{{ $courses->cover }}" alt="{{ $courses->title }}"
                                                    class="w-100">
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-7 text">
                                            <span class="title">{{ $courses->title }}</span>
                                            <span class="mentor">{{ $courses->user->name }}</span>
                                            <span
                                                class="price">{{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-warning">Kelas yang kamu cari nggk ketemu<i class="uil uil-sad-squint ms-1"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
