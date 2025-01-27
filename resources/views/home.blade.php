@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-12">
        <div class="hero">
            <h1>フィリピン留学情報をお届けします</h1>
            <p>現地の情報を集めて、より充実した留学生活を。</p>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-10">
        <div class="card latest">
            <div class="card-body">
                <h2>最新情報・ニュース</h2>
                <div class="row">
                    <div class="col-4">
                        <div class="card latest-item">
                            <div class="card-body text-center">
                                <p>2025年3月15日</p>
                                <h3>2025年最新版 フィリピンのビザ情報</h3>
                                <p>観光ビザや学生ビザの取得方法、更新手続きの最新情報をお届けします。</p>
                                <a href="#" class="btn btn-custom">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card latest-item">
                            <div class="card-body text-center">
                                <p>2025年3月15日</p>
                                <h3>2025年最新版 フィリピンのビザ情報</h3>
                                <p>観光ビザや学生ビザの取得方法、更新手続きの最新情報をお届けします。</p>
                                <a href="#" class="btn btn-custom">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card latest-item">
                            <div class="card-body text-center">
                                <p>2025年3月15日</p>
                                <h3>2025年最新版 フィリピンのビザ情報</h3>
                                <p>観光ビザや学生ビザの取得方法、更新手続きの最新情報をお届けします。</p>
                                <a href="#" class="btn btn-custom">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
