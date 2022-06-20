<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shibaji Debnath - Software Engineer, Developer and Trainer</title>
    <link rel="shortcut icon" href="{{ asset('images/app-icon-114.png') }}" type="image/x-icon">
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
</head>
<body>
    @include('components.navbar')
    @yield('content')
    @include('layouts.footer')
    @bukScripts(true)
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
