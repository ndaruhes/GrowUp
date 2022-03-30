@extends('layouts.dashboard')
@section('title', 'Detail Kelas | GrowUp')

@section('dashboard_content')
    {{-- CREATE FORUM MODAL --}}
    @include('forum.create')

    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-eye"></i>
            Detail Kelas
        </h1>
        <div class="line"></div>
    </div>

    {{-- COURSE DESCRIPTION --}}
    <div class="course-heading">
        <span class="title mb-1">{{ $course->title }}</span>
        <small class="badge bg-green">{{ $course->category->title }}</small>
        <small
            class="text-red fw-bold">{{ $course->price == null ? 'Gratis' : 'Rp' . number_format($course->price) }}</small>
        <span class="description mt-3">{{ $course->description }}</span>
    </div>

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
    <div class="session">
        <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createForum"><i
                class="uil uil-plus me-1"></i>Buat Forum</a>
        @if ($forums->count() != 0)
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
            <div class="alert alert-warning mt-3">Belum ada forum di kelas ini</div>
        @endif
    </div>
@endsection
