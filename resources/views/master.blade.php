<!DOCTYPE html>
  <html lang="nl">
    <head>
      @include('partials._head')
    </head>
    <body>
      @include('partials._navbar')
      @yield('content')
      @include('partials._footer')
    </body>
    </html>
