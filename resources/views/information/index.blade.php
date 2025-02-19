@extends('layouts.app')

@section('title', 'Information')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/filter.js')}}"></script>
@endsection

@section('content')
    <div class="information">
        <h2>フィリピン留学情報</h2>

        <!-- カテゴリー選択 -->
        <div class="filter-menu">
            <button data-category="all" class="category-btn {{request()->get('category_id', 'all') == 'all' ? 'active' : ''}}">すべて</button>
            @foreach ($all_categories as $category)
                <button data-category="{{$category->id}}" class="category-btn {{request()->get('category_id', 'all') == $category->id ? 'active' : ''}}">{{$category->name}}</button>
            @endforeach
        </div>

        <!-- 地域選択 -->
        <div class="region-filter">
            <label for="region-select">地域を選択：</label>
            <select id="region-select">
                <option value="all" {{request()->get('region_id', 'all') == 'all' ? 'selected' : ''}}>すべて</option>
                @foreach ($all_regions as $region)
                    <option value="{{$region->id}}" {{request()->get('region_id', 'all') == $region->id ? 'selected' : ''}}>{{$region->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="grid-container">
            @foreach ($all_information as $information)
                <div class="card-custom" data-category="{{$information->category_id}}"
                    data-region="{{$information->region_id}}">
                    <h3>{{$information->title}}</h3>
                    <p>{{Str::limit($information->intro, 80)}}</p>

                    <a href="{{route('information.show', $information->id)}}" class="read-more">続きを読む</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
