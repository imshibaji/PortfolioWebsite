<div class="flex flex-wrap lg:justify-start justify-items-stretch w-full py-2">
    @foreach ($posts as $post)
        <div class="flex-auto lg:w-1/4 w-auto border border-gray-900 m-3" >
            <div class="card-body justify-between flex-auto p-2">
                <h2 class="h4">{{$post->title}}</h2>
                <div class="py-3">
                    {!! $post->summery !!}

                    @if(isset($post->offer) && $post->offer > 0 && $diff>0)

                        @php
                            $offer_price = $post->price -($post->price * ($post->offer/100));
                            $offer_price_usd = $post->price_usd -($post->price_usd * ($post->offer/100));
                        @endphp
                        <p class="pb-0 mb-0">Actual Price: <del class="text-red-500">₹ {{number_format($post->price, 2)}}</del> or $ <del class="text-red-500">{{number_format($post->price_usd, 2)}}</del></p>
                        <p class="pt-0 mt-0">Offer Price: <strong class="text-green-600">₹ {{ number_format($offer_price, 2) }}</strong> or <strong class="text-green-600">${{ number_format($offer_price_usd, 2) }}</strong></p>
                    @else
                       <br/>Price: <strong class="text-green-500">₹ {{ number_format($post->price, 2) }}</strong> or <strong class="text-green-500">${{number_format($post->price_usd, 2)}}</strong>
                    @endif
                </div>
                <a href="{{url('trainings/'.$post->link)}}" class="btn btn-primary dark:bg-gray-900 dark:border-black">Know More Details</a>
            </div>
        </div>
    @endforeach
</div>

