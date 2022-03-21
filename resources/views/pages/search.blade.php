@extends('layouts.app')

@section('title', 'Explore Courses | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endsection

@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-9 explore">
                {{-- FORM SEARCH --}}
                <div class="explore-heading">
                    <div class="title d-flex align-items-center">
                        <img src="{{ asset('images/rocket.png') }}" alt="rocket.png">
                        <span>Eksplor Semua Kelas</span>
                    </div>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it</p>
                    <form action="{{ route('searchCourse') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('search') is-invalid @enderror" id="search"
                                name="search" placeholder="Cari kelas disini..." value="{{ old('search') }}">
                            <label for="search">Cari kelas disini...</label>
                        </div>
                    </form>
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
                                <div class="col-md-4 col-6">
                                    <a href="#" class="col-md-12 item-content d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-5 image">
                                                <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                    alt="{{ $courses->title }}" class="w-100">
                                            </div>
                                            <div class="col-7 text">
                                                <span class="title">{{ $courses->title }}</span>
                                                @if ($courses->price == null)
                                                    <span class="price text-red"><i
                                                            class="uil uil-rocket me-1"></i>Gratis</span>
                                                @else
                                                    <span
                                                        class="price text-red">Rp{{ number_format($courses->price) }}</span>
                                                @endif
                                                <small class="mentor bg-green-gradient"><i
                                                        class="uil uil-user me-1"></i>{{ $courses->user->name }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-warning">Kelas yang kamu cari nggk ketemu nih<i
                                class="uil uil-sad-squint ms-1"></i><i class="uil uil-confused ms-1"></i></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
