<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Shibaji Debnath - Software Engineer, Developer and Trainer'}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @section('meta')
        <meta name="keywords" content="{{$keyword ?? 'Software Developer, Software Consultant, Trainer and mentor'}}" />
        <x-social-meta
            title="{{$title ?? 'Shibaji Debnath - Software Engineer, Developer and Trainer'}}"
            card="summary"
            description="{{$description ?? 'Professional Software Development Training By Mr. Shibaji Debnath.'}}"
            image="{{$image ?? ''}}"
        />
    @show
    <link rel="shortcut icon" href="{{ asset('images/app-icon-114.png') }}" type="image/x-icon">
    <meta name="msvalidate.01" content="E96AFD0D771D3DACDFA6BB782BA6A589" />
    {{-- @bukStyles(true) --}}
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
    <!-- Global site tag (gtag.js) - Google Ads: 975887438 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-975887438"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-975887438');
    </script>
    <!-- Event snippet for Leads Generate conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
            window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-975887438/KOU6CKPJ6JQBEM64q9ED',
            'event_callback': callback
        });
        return false;
        }
    </script>
    @yield('header')

    {{-- <script type="application/ld+json">
        {
          "@context":"http://schema.org/",
          "@type":"Dataset",
          "name":"Online Software Development Trainer - Shibaji Debnath",
          "description":"I am providing training for Advance Website Designing and Development, Software or Mobile App Development using JavaScript, NodeJS, Python, PHP and MySql, Java, Spring & Hibernet Online / Offline basis in Kolkata.",
          "url":"https://www.shibajidebnath.com/online-training",
          "sameAs":"https://www.shibajidebnath.com",
          "keywords":[
             "Online Software Development Trainer",
             "Online Website Design and Development Trainer",
             "Online Mobile Apps Development Trainer",
             "Online AngularJS Trainer",
             "Online JavaScript Trainer",
             "Online PHP and MySql Triner",
             "Online Java Trainer",
             "AngularJS Trainer in kolkata",
             "JavaScript Trainer in kolkata",
             "Mobile Apps Development Trainer in Kolkata",
             "Website Design and Development Trainer in kolkata",
             "Java Trainer in kolkata"
          ],
          "license" : "https://shibajidebnath.com/",
          "isAccessibleForFree" : true,
          "creator":{
             "@type":"Organization",
             "url": "https://www.shibajidebnath.com/",
             "logo": "https://www.shibajidebnath.com/wp-content/themes/shibaji/images/shibaji_debnath.jpg",
             "name":"Shibaji Debnath - The Individual Software Trainer in kolkata",
             "contactPoint":{
                "@type":"ContactPoint",
                "contactType": "customer service",
                "telephone":"+91-898-100-9499"
             }
          }
        }
    </script> --}}
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N3VTJDB');</script>
    <!-- End Google Tag Manager -->


    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/e5185af6807e8494f6731cd56/0ce5e6f34101fbb8e52297b25.js");</script>

    <!-- Facebook Pixel Code -->
    <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '621360018422126');
          fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=621360018422126&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N3VTJDB"></script>
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    {{-- @bukScripts(true) --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer')
    @captcha
</body>
</html>
