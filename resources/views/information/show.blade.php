@extends('layouts.app')

@section('title', 'Information Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
@endsection


@section('content')
    <div class="information-detail">
        <div class="article-header">
            <h2>{{$information->title}}</h2>
        </div>

        <div class="article-content">
            <p>{{$information->intro}}</p>

            @foreach ($sections as $section)
                <h3>{{$section->heading}}</h3>
                <p>{!! nl2br(e($section->content)) !!}</p>
            @endforeach
        </div>

        <a href="{{url()->previous()}}" class="back-link">戻る</a>

    </div>
@endsection
