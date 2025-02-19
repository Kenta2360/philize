<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('scripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a class="brand text-decoration-none fw-bold me-auto" href="{{route('home')}}">
                    フィリピン留学メモ
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li>
                            <a href="{{route('board.index')}}" class="nav-link">掲示板</a>
                        </li>
                        <li>
                            <a href="{{route('information.index')}}" class="nav-link">情報ページ</a>
                        </li>
                        <li>
                            <a href="{{route('notice.index')}}" class="nav-link">お知らせ</a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}" class="nav-link">お問い合わせ</a>
                        </li>
                        @guest
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                            </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                                </li>
                            @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        @can('admin')
                                            <a class="dropdown-item" href="{{route('admin.information.create')}}">
                                                Admin
                                            </a>
                                        @endcan

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mb-5">
            <div class="row justify-content-center">
                @if (request()->is('admin/*'))
                    <div class="col-3">
                        <div class="list-group mt-5">
                            <a href="{{route('admin.information.create')}}" class="list-group-item {{request()->is('admin/information') ? 'active' : ''}}">
                                情報
                            </a>
                            <a href="{{route('admin.category.create')}}" class="list-group-item {{request()->is('admin/category') ? 'active' : ''}}">
                                カテゴリー
                            </a>
                            <a href="{{route('admin.region.create')}}" class="list-group-item {{request()->is('admin/region') ? 'active' : ''}}">
                                地域
                            </a>
                            <a href="{{route('admin.notice.create')}}" class="list-group-item {{request()->is('admin/notice/create') ? 'active' : ''}}">
                                お知らせ
                            </a>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

        {{-- <footer>
            <div class="container-fluid">
                <h1 class="h5">©フィリピン留学メモ | 利用規約</h1>
            </div>
        </footer> --}}
    </div>
</body>
</html>
