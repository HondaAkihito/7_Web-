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
        <label for="exampleInputEmail1">新しいパスワードを入力</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="新しいパスワードを入力">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">再確認</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="再度新しいパスワードを入力">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">新しいパスワードを入力した</button>
      </div>
    </form>
  </div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>