<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  <title>OFLog ~あなたの風呂活に新たな彩を~</title>
</head>

<body>
  @include('layouts.components.header')
  <div id="app">
    @if (session('flash_message'))
      <div class="flash_message">
        {{ session('flash_message') }}
      </div>
    @endif
    @yield('content')
  </div>

  {{-- <script src="{{ mix('js/app.js') }}"></script> --}} <!-- Vue使用時、コメント外す -->
</body>
</html>