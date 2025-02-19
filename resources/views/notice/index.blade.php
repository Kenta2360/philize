@extends('layouts.app')

@section('title', 'Notice Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/notice-board.css')}}">
@endsection

@section('content')
    <div class="notice-board">
        <h2>お知らせ</h2>
        <div class="news-container">

            @foreach ($all_notices as $notice)
                <div class="news-item">
                    <h3>{{$notice->title}}</h3>
                    <p>{{$notice->content}}</p>
                    <a href="{{route('notice.show', $notice->id)}}">詳細を見る</a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
