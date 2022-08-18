<div class="container py-9">
    <h2 class="h3 font-orbitron text-center my-5">Students and Clients Feedbacks / Reviews</h2>

    <div class="flex lg:flex-row flex-col">
        @foreach ($testimonials as $test)
            <div class="lg:flex-1 card shadow-lg bordered m-2 lg:mx-2">
                <div class="card-body">
                <p>{!!$test->post_content !!}</p>
                @foreach ($test->meta as $meta)
                    @if($meta->meta_key == '_testimonial_name_meta_key')
                        <h2 class="card-title text-right font-caveat text-3xl mt-3">{{$meta->value}}</h2>
                    @endif
                    @if($meta->meta_key == '_testimonial_course_meta_key')
                        <p class="text-right">{{$meta->value}}</p>
                    @endif
                @endforeach
                </div>
            </div>
        @endforeach

        {{-- <div class="card shadow-lg bordered m-2 lg:mx-2">
            <div class="card-body">
              <p>I would highly recommend Shibaji Sir because of the intellectual and high level of maturity possessed by him. Due to the high level of experience gained by him in the teaching field, the way he tackles problems is remarkable. His classes were both easily understandable and entertaining. I would highly recommend Shibaji sir because of the vast level of experience and knowledge he brings with him with an extensive level of commitment as well.</p>
              <h2 class="card-title text-right font-caveat text-3xl mt-3">Vivan Chopra</h2>
              <p class="text-right">Game Development</p>
            </div>
        </div>
        <div class="card shadow-lg bordered m-2 lg:mx-2">
            <div class="card-body">
              <p>Mr. Shibaji Debnath is not only a programming trainer but a programming genius which empowered him to mentor custom and details programming. He is soft spoken, friendly, eager to support against query and doubts. Where good training is not readily available in Kolkata neither online, he is one of best available to train programming languages breaking the barrier of basis teaching offered by others. Thank you Sir for your guidance.</p>
              <h2 class="card-title text-right font-caveat text-3xl mt-3">Sanjib Chatterjee</h2>
              <p class="text-right">Fullstack Development</p>
            </div>
        </div> --}}

    </div>
</div>
