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

                {{-- DATA ANALYST --}}
                @if ($dataanalyst->count() != 0)
                    <div class="courses">
                        <div class="category-title d-flex align-items-center">
                            <img src=" {{ $dataanalyst[0]->category->icon }}"
                                alt="{{ $dataanalyst[0]->category->title }}">
                            <span>{{ $dataanalyst[0]->category->title }}</span>
                        </div>
                        <div class="row">
                            @foreach ($dataanalyst as $courses)
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
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
