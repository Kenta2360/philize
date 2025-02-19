@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container-fluid">
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
                    <div class="row g-4">
                        @if ($all_information)
                            @foreach ($all_information as $information)
                                <div class="col-4">
                                    <div class="card latest-item">
                                        <div class="card-body">
                                            <p>{{$information->created_at}}</p>
                                            <h3>{{$information->title}}</h3>
                                            <p>{{ Str::limit($information->intro, 80)}}</p>
                                            <a href="{{route('information.show', $information->id)}}" class="btn btn-custom">詳しく見る</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

                <div class="card-body">
                    <h2>最新の掲示板</h2>
                    <div class="row g-4">
                        @if ($all_boards)
                            @foreach ($all_boards as $board)
                                <div class="col-4">
                                    <div class="card latest-item">
                                        <div class="card-body">
                                            <p>{{$board->created_at}}</p>
                                            <h3>{{$board->title}}</h3>
                                            <a href="{{route('board.show', $board->id)}}" class="btn btn-custom">詳しく見る</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

                <div class="card-body">
                    <h2>お知らせ</h2>
                    <div class="row g-4">
                        @if ($all_notices)
                            @foreach ($all_notices as $notice)
                                <div class="col-4">
                                    <div class="card latest-item">
                                        <div class="card-body">
                                            <p>{{$notice->created_at}}</p>
                                            <h3>{{$notice->title}}</h3>
                                            <a href="{{route('notice.show', $notice->id)}}" class="btn btn-custom">詳しく見る</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
