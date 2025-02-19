@extends('layouts.app')

@section('title', 'Create Information')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/add-section.js')}}"></script>
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


            <form action="{{route('admin.information.store')}}" method="post" class="create-form">
                @csrf
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" required>

                <label for="category">カテゴリー</label>
                <select name="category_id" required>
                    <option value="" hidden>カテゴリーを選択</option>
                    @foreach ($all_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <label for="region">地域</label>
                <select name="region_id" required>
                    <option value="" hidden>地域を選択</option>
                    @foreach ($all_regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach
                </select>

                <label for="intro">導入分</label>
                <textarea name="intro" id="intro" required></textarea>

                {{-- 見出し追加 --}}
                <div id="sections" class="sections">
                    <h3>セクション</h3>
                </div>

                <button type="button" id="add-section-btn" class="add-section-btn">+ セクションを追加</button>

                <button type="submit" class="submit-btn">投稿する</button>
            </form>
        </div>
    </div>
@endsection
