@extends('layouts.app')

@section('title', 'Create Bulletin Board Category')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bulletin-board.css')}}">
@endsection

@section('content')
    <div class="col-7">
        <div class="region">
            <h2>地域を作成</h2>

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

            <form action="{{route('admin.region.store')}}" method="post">
                @csrf
                <label for="name">地域名</label>
                <input type="text" name="name" id="name" required>

                <button type="submit" class="submit-button">作成する</button>
            </form>

        </div>
    </div>
@endsection
