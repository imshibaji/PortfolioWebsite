<div class="flex flex-wrap lg:justify-start justify-items-stretch w-full py-2 px-0">
    @foreach ($posts as $post)
        <div class="lg:w-1/2 w-full">
            <div class="border border-gray-900 m-3">
                <div class="card-body justify-between flex-auto p-2">
                    <h2 class="h4 mb-0 pb-0">{{$post->title}}</h2>
                    <div class="py-3">
                        <div class="aspect-w-16 aspect-h-9 bg-black">
                            <img src="{{$post->image ?? env('CMS_URL').'/wp-content/uploads/2021/10/no-image.jpeg'}}" class="w-full" alt="{{$post->title}}">
                        </div>
                        <div class="divider p-0 m-0"></div>
                        {!! $post->summery !!}

                        @if ($post->price)
                            <p class="my-0 px-0">Starting Cost: <strong class=" text-green-500">₹{{number_format($post->price, 0)}}</strong> or <strong class=" text-green-500">${{number_format($post->price_usd,0)}}</strong></p>
                        @endif
                    </div>

                    <a href="{{url('services/'.$post->link)}}" class="btn btn-primary dark:bg-gray-900 dark:border-black">Know More Details</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
