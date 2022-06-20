<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Welcome to your learning section'}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @section('meta')
        <meta name="keywords" content="{{$keyword ?? 'Learning Dashboard'}}" />
        <x-social-meta
            title="{{$title ?? 'Welcome To learning Dashboard'}}"
            card="summary"
            description="{{$description ?? 'Professional Software Development Training By Mr. Shibaji Debnath.'}}"
            image="{{$image ?? ''}}"
        />
    @show
    <link rel="shortcut icon" href="{{ asset('images/app-icon-114.png') }}" type="image/x-icon">
    <meta name="msvalidate.01" content="E96AFD0D771D3DACDFA6BB782BA6A589" />
    @bukStyles(true)
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66468803-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-66468803-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BWTBGM0NG0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BWTBGM0NG0');
    </script>
    @yield('header')
</head>
<body>
    @include('user::layouts.navbar')
    @yield('content')
    @include('user::layouts.footer')
    @bukScripts(true)
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer')
</body>
</html>
