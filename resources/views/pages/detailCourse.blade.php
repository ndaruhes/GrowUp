@extends('layouts.app')

@section('title', $course->title . ' | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/course_detail.css') }}">
@endsection

@section('content')
    {{-- CHECKOUT MODAL --}}
    @include('layouts.checkout', ['course' => $course])

    {{-- CLASS DETAIL --}}
    <div class="container">
        <div class="row">
            <div class="col-md-5 info">
                <img src="{{ asset('storage/images/cover/' . $course->cover) }}" alt="{{ $course->title }}"
                    class="w-100">
                <span class="title mb-1">{{ $course->title }}</span>
                <small class="category badge bg-green">{{ $course->category->title }}</small>
                <small class="price text-red fw-bold">
                    {{ $course->price != null ? 'Rp' . number_format($course->price) : 'Gratis' }}
                </small>
                <span class="description mt-3">{{ $course->description }}</span>
                @if (!Auth::user())
                    <a href="#" class="btn d-block w-100 bg-red" data-bs-toggle="modal" data-bs-target="#loginModal">Gabung
                        Kelas Sekarang</a>
                @elseif ($hasTransaction == null)
                    <a href="#" class="btn d-block w-100 bg-red" data-bs-toggle="modal"
                        data-bs-target="#checkoutModal">Gabung Kelas Sekarang</a>
                @elseif ($hasTransaction != null)
                    <a href="#" class="btn bg-secondary text-white w-100 cursor-disabled">Sudah Bergabung</a>
                @endif
            </div>

            <div class="col-md-7 detail">
                {{-- CLASS INFO --}}


                {{-- CLASS SESSION --}}
                <div class="accordion accordion-flush" id="accordionFlushSession">
                    @foreach ($sessions as $session)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $session->id }}">
                                <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $session->id }}"
                                    aria-expanded="false" aria-controls="flush-collapse{{ $session->id }}">
                                    <b>Pertemuan {{ $loop->iteration }}</b> &nbsp;
                                    ({{ \Carbon\Carbon::parse($session->schedule)->format('d M Y') . ', ' . $session->time }})
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $session->id }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{ $session->id }}"
                                data-bs-parent="#accordionFlushSession">
                                <div class="accordion-body">
                                    <p>
                                        <b>Topik Materi</b>
                                        <span>{{ $session->title }}</span>
                                    </p>
                                    <p>
                                        <b>Deskripsi Materi</b>
                                        <span>{{ $session->description }}</span>
                                    </p>
                                    <p>
                                        <b>Link Meeting</b>
                                        <a href="{{ $session->meeting_link }}" target="_blank"
                                            class="text-decoration-none d-block"
                                            @if (!Auth::user()) data-bs-toggle="modal" data-bs-target="#loginModal" @elseif ($hasTransaction == null) data-bs-toggle="modal" data-bs-target="#gabungKelasModal" @endif>Join
                                            Kelas<i class="uil uil-presentation-play ms-1"></i></a>
                                    </p>
                                    <p>
                                        <b>Materi Pembelajaran</b>
                                        <a href="{{ route('downloadResource', $session->id) }}"
                                            class="text-decoration-none d-block"
                                            @if (!Auth::user()) data-bs-toggle="modal" data-bs-target="#loginModal" @elseif ($hasTransaction == null) data-bs-toggle="modal" data-bs-target="#gabungKelasModal" @endif>Unduh
                                            Materi<i class="uil uil-download-alt ms-1"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
