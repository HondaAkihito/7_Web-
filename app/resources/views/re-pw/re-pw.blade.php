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
    <h2 class="mt-5 text-center">パスワード再設定</h2>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">再設定用URLを受け取るメールアドレスを入力してください</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレスを入力">
      </div>
        <button type="submit" class="btn btn-primary">送信</button>
        <small id="emailHelp" class="form-text text-muted text-right"><a href="#">※ログインへ戻る</a></small>
      </div>
    </form>
  </div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>