<!DOCTYPE html>
<html lang="en">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Link Reducer</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
  </head>
<body>
<nav class="navbar">
  <span class="navbar-brand mb-0 h1">Link Reducer</span>
</nav>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
