@extends('layouts.base')

@section('content')
<div class="container px-4">
<div class="flex lg:flex-row flex-col">
    <div class="lg:w-3/12 w-auto py-5 pt-0 order-2 lg:order-1">
        <div class="p-2 flex flex-col">
            @include('services.thumbnail')
        </div>
        <hr class="my-3 mx-2 border border-primary dark:border-white">
        <div class="px-2">
            @include('services.developer')
        </div>
        <div class="px-2">
            <x-client-testimonial-slider limit="{{ $post->meta->review_limit ?? '1' }}" />
        </div>
        {{-- <div class="px-2">
            @include('services.review')
        </div> --}}
        {{-- <div class="px-2">
            @include('tutorial.ads')
        </div> --}}
    </div>

    <div class="lg:w-9/12 w-auto lg:px-5 order-1 lg:order-2">
        <div class="flex flex-col sm:flex-row w-full items-center">
            <div class="w-full sm:w-2/3">
                @if ($post->post_excerpt)
                    <h1 class="h3 my-0 pb-0">{{$post->post_title}}</h1>
                    <h2 class="h6 my-0 pt-0 text-green-600">{{$post->post_excerpt}}</h2>
                @else
                    <h1 class="h3 my-0">{{$post->post_title}}</h1>
                @endif
            </div>
            <div class="w-full sm:w-1/3 sm:text-right">
                <a href="/project/create" class="btn btn-primary btn-sm self-center">Hire Me for Project</a>
            </div>
        </div>
        <hr class="border border-primary dark:border-white">
        <div class="my-2 mb-8">{!! $post->content !!}</div>

        @include('services.cta')
    </div>

</div>

</div>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.2.0/build/styles/monokai-sublime.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el);
  });
});
</script>
<script type="text/javascript">
    function youtube_parser(url){
        var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
        var match = url.match(regExp);
        return (match && match[1].length==11)? match[1] : false;
    }
    function embedVideo(){
        var vidurl = document.querySelector('.wp-block-embed__wrapper').innerHTML.trim();
        console.log(youtube_parser(vidurl));
        var vid = youtube_parser(vidurl);
        document.querySelector('.wp-block-embed__wrapper').innerHTML = '<div class="aspect-w-16 aspect-h-9"><iframe class="w-full h-full object-center object-cover lg:w-full lg:h-full" src="https://www.youtube.com/embed/'+vid+'?&autoplay=1" frameborder="0" allowfullscreen></iframe></div>';
    }
    embedVideo();
</script>
@endsection
