@extends('layouts.app')

@section('title', 'Completed Contact')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
    <div class="completed-contact">
        <h2>お問い合わせ完了</h2>
        <p>お問い合わせいただきありがとうございます。<br>担当者が確認次第、ご連絡いたします。</p>
        <a href="{{route('home')}}" class="back-link">トップページに戻る</a>
    </div>
@endsection
