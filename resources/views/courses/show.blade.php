@extends('layouts.dashboard')
@section('title', 'Course Detail | GrowUp')

@section('dashboard_content')
    {{-- MAKE A MEETING MODAL --}}
    @include('managements.create')

    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-eye"></i>
            Course Detail
        </h1>
        <div class="line"></div>
    </div>

    {{-- COURSE DESCRIPTION --}}
    <div class="course-heading">
        <span class="title">{{ $course->title }}</span>
        <small class="badge bg-green-gradient">{{ $course->category->title }}</small>
        <small
            class="text-red fw-bold">{{ $course->price == null ? 'Free' : 'Rp' . number_format($course->price) }}</small>
        <span class="description">{{ $course->description }}</span>
    </div>

    {{-- LMS MANAGEMENT --}}
    <div class="lms">
        <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createMeet"><i
                class="uil uil-plus me-1"></i>Make a Meeting</a>
        @if ($managements->count() != 0)
            <div class="table-wrapper bg-light">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th-20">#</th>
                            <th class="th-25">Title</th>
                            <th class="th-30">Description</th>
                            <th class="th-15 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($managements as $management)
                            <tr>
                                <td>
                                    <span class="d-block fw-bold">Pertemuan {{ $loop->iteration }}</span>
                                    <small>{{ \Carbon\Carbon::parse($management->schedule)->format('d M') . ' (' . $management->time . ')' }}</small>
                                </td>
                                <td>
                                    <span class="d-block">{{ $management->title }}</span>
                                    <a href="{{ $management->meeting_link }}" class="text-sm text-decoration-none"><i
                                            class="uil uil-meeting-board me-1"></i>Link
                                        Meet</a>
                                </td>
                                <td>{{ substr($management->description, 0, 50) . '...' }}</td>
                                <td class="action-btn-table">
                                    <a href="{{ route('downloadManagement', $management->id) }}" class="text-dark"><i
                                            class="uil uil-import"></i></a>
                                    <a href="{{ route('editManagement', $management->id) }}" class="text-primary mx-1"><i
                                            class="uil uil-edit"></i></a>
                                    <a href="#" data-uri="{{ route('deleteManagement', $management->id) }}"
                                        class="text-danger" data-bs-toggle="modal"
                                        data-bs-target="#confirmDeleteModal"><i class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning mt-3">You haven't held any meeting yet</div>
        @endif
    </div>

@endsection
