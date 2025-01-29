@extends('layouts.app')

@section('title', 'Bulletin Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="content">
        <h2>掲示板</h2>
        <a href="/create-board" class="post-btn">新しい投稿を作成</a>

        <div class="board-container">
            <a href="/board-detail" class="text-decoration-none">
                <div class="post">
                    <h3>ビザ取得に関する最新情報</h3>
                    <p>2025年1月13日 | 作成者: user123</p>
                    <p>フィリピンのビザ申請プロセスについての最新情報です。申請書類の変更点をまとめました。</p>
                </div>
            </a>

            <a href="/board-detail" class="text-decoration-none">
                <div class="post">
                    <h3>セブ島での生活費はどれくらい？</h3>
                    <p>2025年1月10日 | 作成者: user456</p>
                    <p>セブ島で生活するための費用について解説します。具体的な家賃や食費なども詳しく説明。</p>
                </div>
            </a>

            <a href="/board-detail" class="text-decoration-none">
                <div class="post">
                    <h3>マニラでおすすめの日本食レストラン</h3>
                    <p>2025年1月5日 | 作成者: user789</p>
                    <p>マニラで本格的な日本食を楽しめるレストランをご紹介します。お気に入りの場所を共有しましょう！</p>
                </div>
            </a>

        </div>
    </div>
@endsection
