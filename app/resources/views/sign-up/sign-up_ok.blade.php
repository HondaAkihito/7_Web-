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
    <h2 class="mt-5 text-center">新規登録が完了しました！</h2>
    <div class="text-center">
      <button type="submit" class="btn btn-primary mt-3">ログインへ</button>
    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>