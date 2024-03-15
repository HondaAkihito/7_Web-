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

  <div class="container">
    <h2 class="mt-5 text-center">ログイン</h2>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="メールアドレスを入力">
      </div>
      <div class="form-group">
        <label for="password">パスワード</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="パスワードを入力">
        <small id="emailHelp" class="form-text text-muted text-right"><a href="#">※パスワードを忘れた方はこちら</a></small>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">ログインする</button>
        <small id="emailHelp" class="form-text text-muted text-right"><a href="{{ route('register') }}">※会員登録はこちら</a></small>
      </div>
    </form>
  </div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>