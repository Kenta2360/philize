@extends('layouts.app')

@section('title', 'Create Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="create-board">
        <h2>新しい投稿を作成</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="author">作成者名</label>
                <input type="text" name="author" id="author" required>
            </div>

            <div class="form-group">
                <label for="content">投稿内容</label>
                <textarea name="content" id="content" required></textarea>
            </div>

            <button type="submit" class="submit-btn">投稿する</button>
        </form>
    </div>
@endsection
