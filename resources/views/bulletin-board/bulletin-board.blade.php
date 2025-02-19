@extends('layouts.app')

@section('title', 'Bulletin Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="bulletin-board">
        <h2>掲示板</h2>
        <a href="{{route('board.create')}}" class="post-btn">新しい投稿を作成</a>

        <div class="filter-menu">
            <a href="{{route('board.index')}}" class="{{request()->is('bulletin-board/index') ? 'active' : ''}}">すべて</a>
            @foreach ($all_categories as $category)
                <a href="{{route('board.select-index', ['id' => $category->id, 'category' => $category->name])}}" class="{{request()->is('bulletin-board/category/'.$category->id.'/'.$category->name) ? 'active' : ''}}">{{$category->name}}</a>
            @endforeach
        </div>

        <div class="board-container">
            @foreach ($all_boards as $board)
                <a href="{{route('board.show', $board->id)}}" class="text-decoration-none">
                    <div class="post">
                        <h3>{{$board->title}}</h3>
                        <p>{{$board->created_at}} | 作成者: {{$board->user->username}}</p>
                        <p>{{$board->content}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
