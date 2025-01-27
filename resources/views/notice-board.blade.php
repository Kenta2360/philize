@extends('layouts.app')

@section('title', 'Notice Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/notice-board.css')}}">
@endsection

@section('content')
    <div class="notice-board">
        <h2>お知らせ</h2>
        <div class="news-container">
            <div class="news-item">
                <h3>サイトメンテナンスのお知らせ</h3>
                <p>2025年2月1日にサイトメンテナンスを実施します。その間一部機能が利用できなくなる可能性があります。</p>
                <a href="/notice-detail">詳細を見る</a>
            </div>
            <div class="news-item">
                <h3>新しい記事を公開しました</h3>
                <a href="#">記事を読む</a>
            </div>
            <div class="news-item">
                <h3>ユーザーアンケートの実施</h3>
                <p>今後のサイト改善のため、ユーザーアンケートを実施しています。ご協力お願いします。</p>
                <a href="#">アンケートに参加</a>
            </div>
        </div>
    </div>
@endsection
