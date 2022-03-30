@extends('layouts.app')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/thread.css') }}">
@endsection
@section('title','Thread | GrowUp')

@include('forum.editThreadModal')
@include('forum.editReplyModal')

@section('content')
    <div class="container main-container">
        <div class="heading">
            <h1>{{ $title }}}</h1>
        </div>
        <form class="post-thread-container" method="POST" action="{{ route('createThread') }}">
            @csrf
            <div class="input-heading">
                <h2>Post A Thread!</h2>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input name="title" type="text" class="form-control" placeholder="Contoh: Syntax apa yang digunakan untuk membuat class Java?" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="form-floating">
                <textarea name="content" class="form-control text-area-form" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">This is my thread content!</label>
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
            <div class="button-container d-flex justify-content-end">
                <button class="btn bg-green">Post</button>
            </div>
        </form>


        @if ($threads->count() != 0)
        <div class="forum-thread-header">
            <h2>Forum Thread</h2>
        </div>
        <hr>
            @foreach ($threads as $thread)
                <div class="thread-wrapper">
                    <div class="main-thread">
                        <h3>{{ $thread->title }}</h3>
                        <p>{{ $thread->content }}</p>
                        <div class="action-wrapper d-flex gap-4">
                            <p class="text-green">{{ $thread->user->name }}</p>
                            @if($thread->user_id == Auth::user()->id)
                                <p><a class="thread-edit" href="{{ route('editThread', $thread->id) }}" data-bs-toggle="modal" data-bs-target="#editThreadModal">Edit</a></p>
                                <a href="#" data-uri="{{ route('deleteThread', $thread->id) }}"
                                    class="text-danger" data-bs-toggle="modal"
                                    data-bs-target="#confirmDeleteModal">Delete</a>
                            @endif
                        </div>
                    </div>
                    @php $replies = $thread->answer @endphp
                    @if ($replies->count() != 0)
                        @foreach ($replies as $reply)
                            <div class="replies">
                                <p>{{ $reply->content }}</p>
                                <div class="action-wrapper d-flex gap-4">
                                    <p class="text-green">{{ $reply->user->name}}</p>
                                    @if($reply->user_id == Auth::user()->id)
                                        <a class="reply-edit" href="{{ route('editReply', $reply->id) }}" data-bs-toggle="modal" data-bs-target="#editReplyModal">Edit</a>
                                        <a href="#" data-uri="{{ route('deleteReply', $reply->id) }}"
                                            class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal">Delete</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('createReply', $thread->id) }}">
                        @csrf
                        <div class="form-floating">
                            <textarea name="content" class="form-control text-area-form" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Jawab</label>
                        </div>
                        {{-- && $thread->id === session()->get('questionNo') --}}
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
                            <button class="btn bg-green">Post</button>
                        </div>
                    </form>
                </div>
            @endforeach
            @endif
    </div>
@endsection

@section('jsExternal')
    <script>
        const threadForm = document.getElementById('editThreadForm')
        const threadIn = document.getElementsByClassName('thread-in')
        const threadList = document.getElementsByClassName('thread-edit')

        const replyForm  = document.getElementById('editReplyForm')
        const repIn = document.getElementsByClassName('reply-in')
        const replyList = document.getElementsByClassName('reply-edit')

        for(let i = 0; i < threadList.length; i++){
            threadList[i].addEventListener('click', () => {
                const newAction = threadList[i].href
                threadForm.setAttribute('action', newAction)

                let title = threadList[i].parentElement.parentElement.previousElementSibling.previousElementSibling.textContent
                let content = threadList[i].parentElement.parentElement.previousElementSibling.textContent

                threadIn[0].value = title
                threadIn[1].value = content

            })
        }

        for(let i = 0; i < replyList.length; i++){
            replyList[i].addEventListener('click', () => {
                const newAction = replyList[i].href
                replyForm.setAttribute('action', newAction)

                let content = replyList[i].parentElement.previousElementSibling.textContent

                repIn[0].value = content
            })
        }
    </script>
@endsection
