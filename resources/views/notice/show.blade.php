@extends('layouts.app')

@section('title', 'Notice Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/notice-board.css')}}">
@endsection

@section('content')
    <div class="notice">
        <h2>お知らせ詳細</h2>
        <div class="news-detail">
            <h3>{{$notice->title}}</h3>
            <p>{!! nl2br(e($notice->content)) !!}</p>
        </div>
        <a href="{{url()->previous()}}" class="back-link">お知らせ一覧に戻る</a>
    </div>
@endsection
