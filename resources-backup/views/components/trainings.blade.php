<div class="flex flex-wrap lg:justify-start justify-items-stretch w-full py-2">
    @foreach ($posts as $post)
        <div class="flex-auto lg:w-1/4 w-auto border border-gray-900 m-3" >
            <div class="card-body justify-between flex-auto p-2">
                <h2 class="h4">{{$post->title}}</h2>
                <div class="py-3">
                    {!! $post->summery !!}

                    @if(isset($post->offer) && $post->offer > 0)
                        Price: <del class="text-red-500">₹ {{$post->price}}/-</del>
                        <strong class="text-green-600">₹ {{ $post->price -($post->price * ($post->offer/100)) }}/-</strong>
                    @else
                        Price: <strong class="text-green-500">₹ {{$post->price}}/-</strong>
                    @endif
                </div>
                <a href="{{url('trainings/'.$post->link)}}" class="btn btn-primary dark:bg-gray-900 dark:border-black">Know More Details</a>
            </div>
        </div>
    @endforeach
</div>

