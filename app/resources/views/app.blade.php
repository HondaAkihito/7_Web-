<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header-component></header-component>
    <router-view></router-view>
    <div class="text-right container mt-1">
        
            <!-- Authのcheckメソッドはログイン状態でtrueを返す -->
            <!-- @if(Auth::check())
            <a href="#" id="logout" class="my-navbar-item">
                <button class="btn btn-danger">ログアウト</button>
            </a>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;"> -->
            <form id="logout-form" action="{{ route('logout')}}" method="POST">
                <!-- ログアウトはaction="{{ route('logout')}}"をmethod="POST"で送信できれば
                     「AuthenticatesUsers.php」内にある『logout』関数に繋がりログアウトができる。
                     だから下の<script>や上のaタグなどもいらない -->
                @csrf
                <input type="submit" value="ログアウト"></input>
            </form>
                @csrf
                </form>
                <!-- <script>
                    document.getElementById('logout').addEventListener('click', function(event) {
                        // getElementById = 任意のHTMLタグで指定したIDにマッチするドキュメント要素を取得するメソッド
                        // getElementById解説サイト：https://www.sejuku.net/blog/27019#index_id0
                        // addEventListener() = さまざまなイベント処理を実行することができるメソッド
                        // addEventListener解説サイト：https://www.sejuku.net/blog/57625
                        event.preventDefault();
                        // preventDefault() = デフォルトのイベント動作をキャンセルするためのメソッド
                        // preventDefault解説サイト：https://zenn.dev/jboy_blog/articles/a4b768107f172a
                        document.getElementById('logout-form').submit();
                    });
                </script> -->
            @endif

     </div>
</div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
