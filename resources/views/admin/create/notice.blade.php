@extends('layouts.app')

@section('title', 'Create Notice')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/notice-board.css')}}">
@endsection

@section('content')
    <div class="col-7">
        <div class="create-container">
            <h2>情報を作成</h2>

            {{-- 成功メッセージ表示 --}}
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            {{-- エラー表示 --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{route('admin.notice.store')}}" method="post" class="create-form">
                @csrf
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" required>

                <label for="content">詳細</label>
                <textarea name="content" required></textarea>

                <button type="submit" class="submit-btn">投稿する</button>
            </form>

        </div>
    </div>
@endsection
