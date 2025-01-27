@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
    <div class="contact">
        <h2>お問い合わせ</h2>
        <form action="" method="post" class="contact-form">
            @csrf
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" required>

            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" required>

            <label for="message">お問い合わせ</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit">送信</button>
        </form>
    </div>
@endsection
