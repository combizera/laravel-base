<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.scss')

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

    {{-- TIPOGRAFIA --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  </head>
  <body @isset($bodyClass) @class($bodyClass) @endisset>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    {{-- HEADER --}}
    <x-header></x-header>

    {{-- CONTEÚDO --}}
    {{ $slot }}

    {{-- FOOTER --}}
    <x-footer></x-footer>

    @vite('resources/js/app.js')
    @isset($scripts)
      {{ $scripts }}
    @endisset

  </body>
</html>
