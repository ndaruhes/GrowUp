@extends('layouts.app')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/thread.css') }}">
@endsection
@section('title', 'Forum | GrowUp')

@include('forum.editThreadModal')
@include('forum.editReplyModal')

@section('content')
    <div class="container main-container">
        <div class="heading">
            <h1><i class="uil uil-comments-alt me-1"></i>{{ $title }}</h1>
            <hr>
        </div>
        <div class="row">
            {{-- BUAT PERTANYAAN --}}
            <div class="col-md-6 thread-left">
                <div class="section-heading">
                    <h2>Buat Pertanyaan <i class="uil uil-plus-circle ms-1"></i></h2>
                </div>
                <form class="post-thread-container" method="POST" action="{{ route('createThread') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Judul</span>
                        <input name="title" type="text" class="form-control"
                            placeholder="Contoh: Syntax apa yang digunakan untuk membuat class Java?" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="form-floating">
                        <textarea name="content" class="form-control text-area-form" placeholder="Masukkan pertanyaan kamu"
                            id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Masukkan pertanyaan kamu</label>
                    </div>
                    @if ($errors->threadPost->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->threadPost->all() as $error)
                                    <div id="emailHelp" class="form-text">{{ $error }}</div>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="button-container">
                        <button class="btn btn-sm bg-red">Posting Pertanyaan</button>
                    </div>
                </form>
            </div>

            {{-- JAWABAN FORUM --}}
            <div class="col-md-6 thread-right">
                @if ($threads->count() != 0)
                    <div class="section-heading">
                        <h2>Jawaban <i class="uil uil-comment-alt-chart-lines ms-1"></i></h2>
                    </div>
                    @foreach ($threads as $thread)
                        <div class="thread-wrapper">
                            <div class="main-thread">
                                <h3>{{ $thread->title }}</h3>
                                <p>{{ $thread->content }}</p>
                                <div class="action-wrapper d-flex gap-4">
                                    <p class="text-green">{{ $thread->user->name }}</p>
                                    @if ($thread->user_id == Auth::user()->id)
                                        <a class="thread-edit text-decoration-none"
                                            href="{{ route('editThread', $thread->id) }}" data-bs-toggle="modal"
                                            data-bs-target="#editThreadModal">
                                            <i class="uil uil-edit me-1"></i>
                                            Edit
                                        </a>
                                        <a href="#" data-uri="{{ route('deleteThread', $thread->id) }}"
                                            class="text-danger text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal">
                                            <i class="uil uil-trash-alt me-1"></i>
                                            Delete
                                        </a>
                                    @endif
                                </div>
                            </div>
                            @php $replies = $thread->answer @endphp
                            @if ($replies->count() != 0)
                                @foreach ($replies as $reply)
                                    <div class="replies">
                                        <p>{{ $reply->content }}</p>
                                        <div class="action-wrapper d-flex gap-4">
                                            <p class="text-green">{{ $reply->user->name }}</p>
                                            @if ($reply->user_id == Auth::user()->id)
                                                <a class="reply-edit text-decoration-none"
                                                    href="{{ route('editReply', $reply->id) }}" data-bs-toggle="modal"
                                                    data-bs-target="#editReplyModal">
                                                    <i class="uil uil-edit me-1"></i>
                                                    Edit
                                                </a>
                                                <a href="#" data-uri="{{ route('deleteReply', $reply->id) }}"
                                                    class="text-danger text-decoration-none" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal">
                                                    <i class="uil uil-trash-alt me-1"></i>
                                                    Delete
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <form method="POST" action="{{ route('createReply', $thread->id) }}">
                                @csrf
                                <div class="form-floating">
                                    <textarea name="content" class="form-control text-area-form" placeholder="Leave a comment here"
                                        id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Jawab</label>
                                </div>
                                @if ($errors->threadReply->any() && $thread->id == session()->get('questionNo'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->threadReply->all() as $error)
                                                <div id="emailHelp" class="form-text">{{ $error }}</div>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="button-container">
                                    <button class="btn btn-sm bg-green">Posting Jawaban</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

@section('jsExternal')
    <script>
        const threadForm = document.getElementById('editThreadForm')
        const threadIn = document.getElementsByClassName('thread-in')
        const threadList = document.getElementsByClassName('thread-edit')

        const replyForm = document.getElementById('editReplyForm')
        const repIn = document.getElementsByClassName('reply-in')
        const replyList = document.getElementsByClassName('reply-edit')

        for (let i = 0; i < threadList.length; i++) {
            threadList[i].addEventListener('click', () => {
                const newAction = threadList[i].href
                threadForm.setAttribute('action', newAction)

                let title = threadList[i].parentElement.parentElement.previousElementSibling.previousElementSibling
                    .textContent
                let content = threadList[i].parentElement.parentElement.previousElementSibling.textContent

                threadIn[0].value = title
                threadIn[1].value = content

            })
        }

        for (let i = 0; i < replyList.length; i++) {
            replyList[i].addEventListener('click', () => {
                const newAction = replyList[i].href
                replyForm.setAttribute('action', newAction)

                let content = replyList[i].parentElement.previousElementSibling.textContent

                repIn[0].value = content
            })
        }
    </script>
@endsection
