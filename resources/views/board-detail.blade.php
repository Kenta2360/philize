@extends('layouts.app')

@section('title', 'Bulletin Board Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="content-detail">
        <h2>掲示板詳細</h2>
        <div class="post-details">
            <h3>ビザの取得方法について教えてください</h3>
            <p>投稿者: user123</p>
            <span>投稿日: 2025-01-15</span>
            <p>ビザを取得する際の流れについて知りたいです。どなたか詳しく教えていただけませんか？</p>
        </div>

        <div class="comments">
            <h3>コメント</h3>
            <div class="comment">
                <p>ビザはオンラインで申請できますよ！公式サイトを確認すると良いです。</p>
                <span>投稿者: user456 | 投稿日: 2025-01-16</span>
            </div>
            <div class="comment">
                <p>申請の際にはパスポートのコピーと写真が必要です。</p>
                <span>投稿者: user789 | 投稿日: 2025-01-16</span>
            </div>
        </div>

        <div class="comment-form">
            <h3>コメントを投稿</h3>
            <textarea rows="4" placeholder="コメントを入力してください..."></textarea>
            <button>投稿する</button>
        </div>
    </div>
@endsection
