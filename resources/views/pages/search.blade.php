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
                        <span>Explore All Courses</span>
                    </div>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it</p>
                    <form action="{{ route('searchCourse') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('search') is-invalid @enderror" id="search"
                                name="search" placeholder="Search Courses here" value="{{ old('search') }}">
                            <label for="search">Search Courses</label>
                        </div>
                    </form>
                </div>

                {{-- SEARCH RESULT --}}
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ asset('images/magnifier.png') }}" alt="magnifier.png">
                        <span>Search Result</span>
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
                        <div class="alert alert-warning">The course you were looking for could not be found<i
                                class="uil uil-confused ms-1"></i></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
