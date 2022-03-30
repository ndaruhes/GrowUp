@extends('layouts.app')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/thread.css') }}">
@endsection
@section('title','Thread | GrowUp')

@section('content')
    <div class="container main-container">
        <div class="heading">
            <h1>Placeholder</h1>
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
                        <p class="text-green">{{ $thread->user->name }}</p>
                    </div>
                    @php $replies = $thread->answer @endphp
                    @if ($replies->count() != 0)
                        @foreach ($replies as $reply)
                            <div class="replies">
                                <p>{{ $reply->content }}</p>
                                <p class="text-green">{{ $reply->user->name}}</p>
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('createReply', $thread->id) }}">
                        @csrf
                        <div class="form-floating">
                            <textarea name="content" class="form-control text-area-form" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Jawab</label>
                        </div>
                        <div class="button-container">
                            <button class="btn bg-green">Post</button>
                        </div>
                    </form>
                </div>
            @endforeach
            @endif
    </div>

@endsection
