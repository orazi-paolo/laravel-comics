<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('additional-meta')
    <title>@yield("page-title", "")</title>

    {{-- aggiungo i file scss --}}
    @vite(['resources/scss/app.scss', 'resources/scss/header.scss', 'resources/scss/jumbotron.scss', 'resources/scss/main.scss', 'resources/scss/footer.scss'])

    @yield('additional-cdn')
</head>

<body>

    {{-- inserisci contenuti da chi estende --}}
    @yield("main-content")

    {{-- includi footer --}}
    @include('partials.footer')

    @yield('additional-script')
    @vite("resources/js/app.js")
</body>

</html>
