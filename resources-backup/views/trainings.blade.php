@extends('layouts.base')

@section('content')
<div class="container pad-top-60 px-4">
    <div class="flex lg:flex-row flex-col-reverse">
        <div class="lg:w-4/12 w-auto py-5">
            <div class="px-2">
                @include('components.teacher')
            </div>
        </div>
        <div class="lg:w-8/12 w-auto lg:px-5">
            <h1 class="h3 my-0">{{$post->post_title}}</h1>
            <hr class="border border-primary dark:border-white">
            <div class="my-2 mb-8 h-100v overflow-y-scroll no-scrollbar">{!! $post->content !!}</div>
        </div>
    </div>
</div>
@endsection
