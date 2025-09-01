<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title','KiM – Kossà I Mange')</title>
  <meta name="description" content="@yield('meta_description','Anti-gaspillage et cuisine solidaire')">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('styles')
</head>
<body>
  @yield('content')
  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>
</html>
