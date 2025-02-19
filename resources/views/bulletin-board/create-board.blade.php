@extends('layouts.app')

@section('title', 'Create Board')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="create-board">
        <h2>新しい投稿を作成</h2>
        <form action="{{route('bulletin.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" required>
            </div>


            <div class="form-group">
                <label for="category">カテゴリー</label>
                <select name="category_id" id="category" required>
                    <option value="" hidden>カテゴリーを選択</option>
                    @foreach ($all_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="content">投稿内容</label>
                <textarea name="content" id="content" required></textarea>
            </div>

            <button type="submit" class="submit-btn">投稿する</button>
        </form>
    </div>
@endsection
