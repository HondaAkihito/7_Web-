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
    <h2 class="mt-5 text-center">新規登録　確認画面</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">記入した情報に間違いはありませんか？</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>メールアドレス：</strong>sample@sample.com</li>
          <li class="list-group-item"><strong>パスワード：</strong>Password</li>
        </ul>
        <form action="registration_process.php" method="post">
          <!-- Hidden input fields to submit the form data -->
          <input type="hidden" name="email" value="sample@sample.com">
          <input type="hidden" name="Password" value="Password">
          <button type="submit" class="btn btn-primary mt-3">間違いありません</button>
        </form>
      </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>