@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
    <div class="contact">
        <h2>お問い合わせ</h2>

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


        <form action="{{route('contact.store')}}" method="post" class="contact-form">
            @csrf
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" required>

            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" required>

            <label for="message">お問い合わせ</label>
            <textarea name="content" rows="5" required></textarea>

            <button type="submit">送信</button>
        </form>
    </div>
@endsection
