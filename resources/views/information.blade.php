@extends('layouts.app')

@section('title', 'Information')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
@endsection

@section('content')
    <div class="container">
        <h2>フィリピン留学情報</h2>
        <div class="filter-menu">
            <button class="active">すべて</button>
            <button>ビザ情報</button>
            <button>現地情報</button>
            <button>持ち物</button>
            <button>その他</button>
        </div>
        <div class="grid-container">
            <div class="card-custom">
                {{-- <img src="" alt=""> --}}
                <h3>ビザの取得方法</h3>
                <p>ビザの取得手順や必要書類を詳しく解説。</p>
                <a href="/information-detail">続きを読む</a>
            </div>
            <div class="card-custom">
                {{-- <img src="" alt=""> --}}
                <h3>ビザの取得方法</h3>
                <p>ビザの取得手順や必要書類を詳しく解説。</p>
                <a href="#">続きを読む</a>
            </div>
            <div class="card-custom">
                {{-- <img src="" alt=""> --}}
                <h3>ビザの取得方法</h3>
                <p>ビザの取得手順や必要書類を詳しく解説。</p>
                <a href="#">続きを読む</a>
            </div>
        </div>
    </div>

@endsection
