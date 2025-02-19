@extends('layouts.app')

@section('title', 'Bulletin Board Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="content-detail">
        <h2>掲示板詳細</h2>
        <div class="post-details">
            <h3>{{$board->title}}</h3>
            <p>投稿者: {{$board->user->username}}</p>
            <span>投稿日: {{$board->created_at}}</span>
            <p>{{$board->content}}</p>
        </div>

        <div class="comments">
            <h3>コメント</h3>
            @foreach ($all_comments as $comment)
                <div class="comment">
                    <p>{{$comment->content}}</p>
                    <span>投稿者: {{$comment->user->username}} | 投稿日: {{$comment->created_at}}</span>
                </div>
            @endforeach

        </div>

        <div class="comment-form">
            <h3>コメントを投稿</h3>
            <form action="{{route('comment.store')}}" method="post">
                @csrf
                <input type="hidden" name="board_id" value="{{$board->id}}">
                <textarea name="content" rows="4" placeholder="コメントを入力してください..."></textarea>
                <button type="submit">投稿する</button>
            </form>
        </div>

        <a href="{{url()->previous()}}" class="back-link">戻る</a>

    </div>
@endsection
