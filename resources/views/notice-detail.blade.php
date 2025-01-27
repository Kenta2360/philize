@extends('layouts.app')

@section('title', 'Notice Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/notice-board.css')}}">
@endsection

@section('content')
    <div class="notice">
        <h2>お知らせ詳細</h2>
        <div class="news-detail">
            <h3>サイトメンテナンスのお知らせ</h3>
            <p>2025年2月1日にサイトメンテナンスを実施します。その間、一部の機能が利用できなくなる可能性があります。</p>
            <p>影響のあるサービス：ログイン機能、掲示板の投稿、コメント機能</p>
            <p>ご不便をおかけしますが、ご理解のほどよろしくお願いいたします。</p>
        </div>
        <a href="/notice-board" class="back-link">お知らせ一覧に戻る</a>
    </div>
@endsection
