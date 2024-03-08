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
    <h2 class="mt-5 text-center">新規登録</h2>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">メールアドレス</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレスを入力">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">パスワード</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワードを入力">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">パスワード再確認</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="上と同じパスワードを入力">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">新規登録する</button>
      </div>
      <small id="emailHelp" class="form-text text-muted text-right"><a href="#">※ログインへ戻る</a></small>
    </form>
  </div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>