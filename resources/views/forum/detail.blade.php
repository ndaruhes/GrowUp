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
            <div class="col-md-4 info">
                @if (explode('/', $course->cover)[0] != 'https:')
                    <img src="{{ $course->cover != null ? asset('storage/images/cover/' . $course->cover) : asset('images/no-image.png') }}"
                        alt="{{ $course->title }}" class="w-100">
                @else
                    <img src="{{ $course->cover }}" alt="{{ $course->title }}" class="w-100">
                @endif
                <span class="title mb-1">{{ $course->title }}</span>
                <span
                    class="mentor">{{ Auth::user() && Auth::user()->id == $course->mentor_id? 'Kamu adalah mentor di kelas ini 👏': $course->user->name }}</span>
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
                <div class="container">
                    <div class="row">
                        {{-- CLASS INFO --}}
                        <div class="class-info">
                            <div class="row">
                                <div class="class-info-item col-md-3 col-6">
                                    <div>
                                        <b>Kelas Dimulai</b>
                                        <br>
                                        <i class="uil uil-hourglass me-1"></i>
                                        {{ \Carbon\Carbon::parse($course->started_at)->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="class-info-item col-md-3 col-6">
                                    <div>
                                        <b>Kelas Berakhir</b>
                                        <br>
                                        <i class="uil uil-calendar-alt me-1"></i>
                                        {{ \Carbon\Carbon::parse($course->ended_at)->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="class-info-item col-md-3 col-6">
                                    <div>
                                        <b>Total Mentee</b>
                                        <br>
                                        <i class="uil uil-users-alt me-1"></i>{{ $transaction->count() }} /
                                        {{ $course->max_mentee }}
                                    </div>
                                </div>
                                <div class="class-info-item col-md-3 col-6">
                                    <div>
                                        <b>Rating Kelas</b>
                                        <br>
                                        @for ($i = 1; $i <= $course->rating; $i++)
                                            <i class="uis uis-star text-yellow"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- CLASS FORUMS --}}
                        @if ($forums->count() != null)
                            <div class="table-wrapper bg-light">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="th-1">#</th>
                                            <th class="th-25">Judul Forum</th>
                                            <th class="th-5">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forums as $forum)
                                            <tr>
                                                <td>
                                                    <span class="d-block fw-bold">{{ $loop->iteration }}</span>
                                                </td>
                                                <td>{{ $forum->title }}</td>
                                                <td class="action-btn-table">
                                                    <a href="{{ route('thread', $forum->id) }}"
                                                        class="badge bg-dark text-decoration-none">
                                                        Lihat Forum
                                                        <i class="uil uil-eye ms-1"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-warning">Mentor belum mengatur pertemuan dikelas ini. Ditunggu aja ya 😁
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
