@extends('layouts.base')

@section('content')
<div class="container px-4">
<div class="flex lg:flex-row flex-col">
    {{-- <div class="lg:w-8/12 w-auto lg:px-5 h-100v overflow-y-scroll no-scrollbar"> --}}
    <div class="lg:w-9/12 w-auto lg:px-5">
        @if ($post->post_excerpt)
            <h1 class="h3 my-0 pb-0">{{$post->post_title}}</h1>
            <h2 class="h6 my-0 pt-0 text-green-600">{{$post->post_excerpt}}</h2>
        @else
            <h1 class="h3 my-0">{{$post->post_title}}</h1>
        @endif
        <hr class="border border-primary dark:border-white">
        <div class="my-2 mb-8">{!! $post->content !!}</div>
    </div>
    <div class="lg:w-3/12 w-auto py-5">
        <div class="px-2">
            @include('components.teacher')
        </div>
        <div class="px-2">
            @if(request()->is('software-development-course'))
                <x-testimonials-slider limit="{{ $post->meta->review_limit ?? '6' }}" />
            @else
                <x-testimonial-slider />
            @endif
        </div>
        {{-- <div class="px-2">
            @include('tutorial.ads')
        </div> --}}
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
        // console.log(youtube_parser(vidurl));
        var vid = youtube_parser(vidurl);
        document.querySelector('.wp-block-embed__wrapper').innerHTML = '<div class="aspect-w-16 aspect-h-9"><iframe class="w-full h-full object-center object-cover lg:w-full lg:h-full" src="https://www.youtube.com/embed/'+vid+'?&autoplay=1" frameborder="0" allowfullscreen></iframe></div>';
    }
    embedVideo();
</script>
@endsection
