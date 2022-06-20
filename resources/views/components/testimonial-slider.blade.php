<div class="container py-5">
    <h6 class="font-orbitron text-center"><a href="{{url('testimonials')}}">Customers / Students Feedbacks</a></h6>

    <div class="flex flex-col">
        @foreach ($testimonials as $test)
            <div class="lg:flex-1 card shadow-lg bordered m-2 lg:mx-2">
                <div class="card-body">
                <div>{!! substr($test->post_content, 0, 100) !!}...</div>
                @foreach ($test->meta as $meta)
                    @if($meta->meta_key == '_testimonial_name_meta_key')
                        <h2 class="text-right font-caveat text-xl my-0">{{$meta->value}}</h2>
                    @endif
                    @if($meta->meta_key == '_testimonial_course_meta_key')
                        <p class="text-right">{{$meta->value}}</p>
                        @include('components.rating')
                    @endif
                @endforeach
                </div>
            </div>
        @endforeach
        <h6 class="font-orbitron text-center"><a href="{{url('testimonials')}}">-: More Feedbacks :-</a><h6>
    </div>
</div>
