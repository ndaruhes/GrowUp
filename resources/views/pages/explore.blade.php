@extends('layouts.app')

@section('title', 'Eksplor Kelas | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endsection

@section('content')
    <div class="container wrapper">
        <div class="explore">
            <div class="explore-heading">
                <div class="title d-flex align-items-center">
                    <span>Eksplor Semua Kelas</span>
                    <img src="{{ asset('images/rocket.png') }}" alt="rocket.png">
                </div>
                <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>

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

            {{-- DATA ANALYST --}}
            @if ($dataanalyst->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $dataanalyst[0]->category->icon }}" alt="{{ $dataanalyst[0]->category->title }}">
                        <span>{{ $dataanalyst[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($dataanalyst as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5 image">
                                            <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                alt="{{ $courses->title }}" class="w-100">
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
                </div>
            @endif

            {{-- GRAPHIC DESIGN --}}
            @if ($graphicdesign->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $graphicdesign[0]->category->icon }}"
                            alt="{{ $graphicdesign[0]->category->title }}">
                        <span>{{ $graphicdesign[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($graphicdesign as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5 image">
                                            <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                alt="{{ $courses->title }}" class="w-100">
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
                </div>
            @endif

            {{-- WEB DEVELOPMENT --}}
            @if ($webdevelopment->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $webdevelopment[0]->category->icon }}"
                            alt="{{ $webdevelopment[0]->category->title }}">
                        <span>{{ $webdevelopment[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($webdevelopment as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5 image">
                                            <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                alt="{{ $courses->title }}" class="w-100">
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
                </div>
            @endif

            {{-- CHINESE LANGUAGE --}}
            @if ($chineselanguage->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $chineselanguage[0]->category->icon }}"
                            alt="{{ $chineselanguage[0]->category->title }}">
                        <span>{{ $chineselanguage[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($chineselanguage as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5 image">
                                            <img src="{{ $courses->cover != null ? asset('storage/images/cover/' . $courses->cover) : asset('images/no-image.png') }}"
                                                alt="{{ $courses->title }}" class="w-100">
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
                </div>
            @endif
        </div>
    </div>
@endsection
