<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="svg/favicon.png">

    {{-- TÍTULO --}}
    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.scss')

    {{-- PALAVRAS CHAVE --}}
    <meta name="keywords" content="Key-word 1, Key-word 2, Key-word 3" />

    {{-- TIPOGRAFIA --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- ICONS --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  </head>
  <body @isset($bodyClass) @class($bodyClass) @endisset>

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
