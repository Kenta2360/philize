@extends('layouts.app')

@section('title', 'Information Detail')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
@endsection

@section('content')
    <div class="information-detail">
        <div class="article-header">
            <h2>ビザの取得方法</h2>
            {{-- <img src="" alt=""> --}}
        </div>

        <div class="article-content">
            <p>フィリピン留学をするためには、適切なビザを取得する必要があります。本記事では、必要な手続きや申請の流れについて詳しく解説します。</p>

            <h3>ビザの種類</h3>
            <p>フィリピンには観光ビザ、学生ビザ、特別就学ビザ（SSP）などの種類があります。留学目的に応じて、適切なビザを選ぶことが重要です。</p>

            <h3>ビザ申請の流れ</h3>
            <p>1. 必要書類の準備（パスポート、申請フォーム、写真など）<br>
               2. フィリピン大使館または領事館での申請<br>
               3. 承認後、ビザの発給を受ける</p>

            <h3>注意点</h3>
            <p>ビザの申請には一定の期間が必要です。事前に余裕を持って申請しましょう。また、SSP（特別就学許可証）は学校側で申請する必要があります。</p>
        </div>

        <a href="/information" class="back-link">戻る</a>
    </div>
@endsection
