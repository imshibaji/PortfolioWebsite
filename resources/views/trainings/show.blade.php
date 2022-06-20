@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="flex lg:flex-row flex-col-reverse">
        <div class="lg:w-3/12 w-auto py-5">
            <div class="px-2">
                @include('components.teacher')
            </div>
            <div class="px-2">
                @include('trainings.review')
            </div>
            <div class="px-2">
                <x-testimonials-slider limit="{{ ($post->meta->review_limit =='')? 7 : $post->meta->review_limit}}" />
            </div>
            {{-- <div class="px-2">
                @include('tutorial.ads')
            </div> --}}
        </div>
        <div class="lg:w-9/12 w-auto lg:px-5">
            @if ($post->post_excerpt)
                <h1 class="h3 my-0 pb-0">{{$post->post_title}}</h1>
                <h2 class="h6 my-0 pt-0 text-green-600">{{$post->post_excerpt}}</h2>
            @else
                <h1 class="h3 my-0">{{$post->post_title}}</h1>
            @endif
            <hr class="border border-primary dark:border-white">
            {{-- <div class="my-2 mb-8 lg:h-100v lg:overflow-y-scroll no-scrollbar">{!! $post->content !!}</div> --}}
            <div class="my-2 mb-8">{!! $post->content !!}</div>
        </div>
    </div>
</div>
@endsection
