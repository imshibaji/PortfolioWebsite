@extends('layouts.base')

@section('content')
<div class="container px-4">
<div class="flex lg:flex-row flex-col py-1">
    <div class="lg:w-8/12 w-full lg:px-5">
        <h1 class="h3 my-0">Students Testimonials</h1>
        <hr class="border border-primary dark:border-white">
        <div class="my-2 mb-8">
            <div class="flex flex-wrap lg:justify-start justify-items-stretch w-full py-2 lg:h-100v lg:overflow-y-scroll no-scrollbar">
                @foreach ($posts as $post)
                    <div id="{{$post->slug}}" class="flex-auto w-auto border border-gray-900 my-3" >
                        <div class="card-body justify-between flex-auto p-2 pr-0 pb-0">
                            {{-- <h2 class="h5 px-2"><a href="{{url($post->slug)}}">{{$post->title}}</a></h2> --}}
                            <h2 class="h5 px-2"><a href="#{{$post->slug}}">{{$post->title}}</a></h2>
                            <div class="py-3 p-2">
                                {!!$post->content !!}
                            </div>
                            <div class="w-full flex-none text-right pr-3">
                                <h4 class="my-0 pb-0 text-xl">By {{$post->meta->_testimonial_name_meta_key}}</h4>
                                <h5 class="my-0 py-0 text-sm">For {{$post->meta->_testimonial_course_meta_key}}</h5>
                                @include('components.rating')
                                {{-- <a href="{{url($post->slug)}}" class="btn btn-sm btn-primary dark:bg-gray-900 dark:border-black mr-0 mb-0">Know More...</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="my-2 mb-8">{{$posts->links()}}</div> --}}
    </div>
    <div class="lg:w-4/12 w-full lg:py-5">
        <div class="lg:px-2">
            <div class="card bordered py-4 mb-2">
                <h5 class="text-center">Give Me Your Feedback</h5>
                <div class="flex flex-col lg:flex-row w-full px-5">
                    <a href="https://g.page/r/CVi8a0L6o6qVEAI/review" target="_blank" class="btn btn-warning bg-yellow-500 dark:bg-yellow-900 text-white w-full lg:w-1/2">For Google</a>
                    <a href="https://www.urbanpro.com/rr/315540" target="_blank"  class="btn btn-success dark:bg-green-900 text-white w-full lg:w-1/2">For UrbanPro</a>
                </div>
            </div>
            @include('components.teacher')
        </div>
    </div>
</div>

</div>
@endsection
