<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
          <div class="text-center my-5">
              <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="128px">
          </div>
        {{ $slot }}
    </body>
    <script src="{{ asset('assets/bootstrap/bundle.min.js') }}"></script>
</html>
