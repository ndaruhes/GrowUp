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
                    <span>Mau Belajar Apa Kamu Hari Ini...</span>
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
                            <a href="{{ route('courseCategory', $category->id) }}"
                                class="btn bg-outline-green btn-sm">{{ $category->title }}
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
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
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
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- ACCOUNTING --}}
            @if ($accounting->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $accounting[0]->category->icon }}" alt="{{ $accounting[0]->category->title }}">
                        <span>{{ $accounting[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($accounting as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- DATA SCIENCE --}}
            @if ($datascience->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $datascience[0]->category->icon }}"
                            alt="{{ $datascience[0]->category->title }}">
                        <span>{{ $datascience[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($datascience as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- UI UX DESIGN --}}
            @if ($uiuxdesign->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $uiuxdesign[0]->category->icon }}" alt="{{ $uiuxdesign[0]->category->title }}">
                        <span>{{ $uiuxdesign[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($uiuxdesign as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- MOBILE DEVELOPMENT --}}
            @if ($mobiledevelopment->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $mobiledevelopment[0]->category->icon }}"
                            alt="{{ $mobiledevelopment[0]->category->title }}">
                        <span>{{ $mobiledevelopment[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($mobiledevelopment as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
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
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- BUSINESS --}}
            @if ($business->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $business[0]->category->icon }}" alt="{{ $business[0]->category->title }}">
                        <span>{{ $business[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($business as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- STATISTIC --}}
            @if ($statistic->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $statistic[0]->category->icon }}" alt="{{ $statistic[0]->category->title }}">
                        <span>{{ $statistic[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($statistic as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- JAPANASE LANGUAGE --}}
            @if ($japaneselanguage->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $japaneselanguage[0]->category->icon }}"
                            alt="{{ $japaneselanguage[0]->category->title }}">
                        <span>{{ $japaneselanguage[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($japaneselanguage as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
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
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- MATHEMATIC --}}
            @if ($mathematic->count() != 0)
                <div class="courses">
                    <div class="category-title d-flex align-items-center">
                        <img src=" {{ $mathematic[0]->category->icon }}"
                            alt="{{ $mathematic[0]->category->title }}">
                        <span>{{ $mathematic[0]->category->title }}</span>
                    </div>
                    <div class="row">
                        @foreach ($mathematic as $courses)
                            <div class="col-md-3 col-12">
                                <a href="{{ route('detailCourse', $courses->id) }}"
                                    class="col-md-12 item-content d-flex align-items-center">
                                    <div class="row">
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
                                            <span class="rating">
                                                @for ($i = 1; $i <= $courses->rating; $i++)
                                                    <i class="uis uis-star text-yellow"></i>
                                                @endfor
                                            </span>
                                            <span class="price">
                                                {{ $courses->price == null ? 'Gratis' : 'Rp' . number_format($courses->price) }}
                                            </span>
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
