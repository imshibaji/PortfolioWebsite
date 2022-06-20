<h3 class="pb-0 mb-0">What you will get from this Course?</h3>
<h5 class="pt-1 mt-1">Course Features:-</h5>
<div class="flex flex-col sm:flex-row">
    <div class="flex flex-col w-full text-xl">
        @if($features != '')
            @php
                $af = explode(',', $features);
                // dd($af)
            @endphp
            <ul class="py-2">
                @foreach($af as $a)
                    <li>{{trim($a)}}</li>
                @endforeach
            </ul>
        @else
            <ul class="py-2 pr-2">
                <li>Expert-led Live Sessions</li>
                <li>Hands-On Assignments</li>
                <li>Real-world Project for Job Interview</li>
                <li>Lifetime Access Premium Learning Contents</li>
            </ul>
        @endif
    </div>
    <div class="flex flex-col w-full text-xl">
        <div class="w-full">
            @if($offer_amt>0 && $diff>0 && $is_discount=='')
            @php
                $offer_price = $amt -($amt * ($offer_amt/100));
                $offer_price_usd = $amt_usd -($amt_usd * ($offer_amt/100));
            @endphp
            <p class="mb-0 pb-0">Actual Price: <del class="text-red-500">₹ {{number_format($amt, 2)}}</del> or <del class="text-red-500">${{number_format($amt_usd, 2)}}</del></p>
            <p class="mt-0 pt-0">Offer Price: <strong class="text-green-600">₹ {{ number_format($offer_price, 2) }}</strong> or <strong class="text-green-600">${{ number_format($offer_price_usd, 2) }}</strong></p>
            @else
                Price: <strong class="text-green-500">₹ {{number_format($amt, 2)}}</strong> or <strong class="text-green-500">${{number_format($amt_usd, 2)}}/-</strong>
            @endif
        </div>
        <div class="w-full">Class Type: {{$ctype}}</div>
        <div class="w-full">Prerequisist: {{$know}}</div>
        <div class="w-full">Class Duration: {{$duration}}</div>
        <div class="w-full">Practice: {{$duration}}</div>
    </div>
</div>
<div class="w-full pt-3">
    <a href="#my-modal" class="btn btn-sm btn-primary dark:bg-black dark:border-black">Book Your Seat Now</a>
    {{-- <a href="#sub-modal" class="btn btn-sm btn-success dark:text-gray-100 dark:bg-black dark:border-black">Book for Demo Session</a> --}}
</div>

<div class="my-5">{!!$content !!}</div>

<h5 class="pb-0 mb-0">Course Features:</h5>
<div class="flex flex-col sm:flex-row">
    <div class="flex flex-col w-full text-xl">
        @if($features != '')
            @php
                $af = explode(',', $features);
                // dd($af)
            @endphp
            <ul class="py-2">
                @foreach($af as $a)
                    <li>{{trim($a)}}</li>
                @endforeach
            </ul>
        @else
            <ul class="py-2">
                <li>Expert-led Live Sessions</li>
                <li>Hands-On Assignments</li>
                <li>Real-world Project for Job Interview</li>
                <li>Lifetime Access Premium Contents</li>
            </ul>
        @endif
    </div>
    <div class="flex flex-col w-full text-xl">
        <div class="w-full">
            @if($offer_amt>0 && $diff>0 && $is_discount=='')
            @php
                $offer_price = $amt -($amt * ($offer_amt/100));
                $offer_price_usd = $amt_usd -($amt_usd * ($offer_amt/100));
            @endphp
            <p class="mb-0 pb-0">Actual Price: <del class="text-red-500">₹ {{number_format($amt, 2)}}</del> or <del class="text-red-500">${{number_format($amt_usd, 2)}}</del></p>
            <p class="mt-0 pt-0">Offer Price: <strong class="text-green-600">₹ {{ number_format($offer_price, 2) }}</strong> or <strong class="text-green-600">${{ number_format($offer_price_usd, 2) }}</strong></p>
            @else
                Price: <strong class="text-green-500">₹ {{number_format($amt, 2)}}</strong> or <strong class="text-green-500">${{number_format($amt_usd, 2)}}/-</strong>
            @endif
        </div>
        <div class="w-full">Class Type: {{$ctype}}</div>
        <div class="w-full">Prerequisist: {{$know}}</div>
        <div class="w-full">Class Duration: {{$duration}}</div>
        <div class="w-full">Practice: {{$duration}}</div>
    </div>
</div>
<div class="w-full mb-5">
    <a href="#my-modal" class="btn btn-sm btn-primary dark:bg-black dark:border-black">Book Your Seat Now</a>
    {{-- <a href="#sub-modal" class="btn btn-sm btn-success dark:text-gray-100 dark:bg-black dark:border-black">Book for Demo Session</a> --}}
</div>


{{-- Modal UI --}}
<div id="my-modal" class="modal">
    <div class="modal-box">
      <h6 class="pb-0 mb-0 text-blue-600 text-xs">Book Now</h6>
      <h4 class="py-0 my-0">{{$title ?? 'Students Training Programme'}}</h4>
      <h6 class="pt-0 mt-0">
          Price:
            @if($offer_amt>0 && $diff>0 && $is_discount=='')
                @php
                    $offer_price = $amt -($amt * ($offer_amt/100));
                    $main_price = $offer_price;
                @endphp
                <del class="text-red-500">₹ {{number_format($amt, 2)}}/-</del>
                <strong class="text-green-600">₹ {{ number_format($offer_price, 2) }}/-</strong>
            @else
                @php
                    $main_price = $amt;
                @endphp
                <strong class="text-green-500">₹ {{number_format($amt, 2)}}/-</strong>
            @endif
      </h6>
      <form action="/trainings/enquery" method="POST">
          @csrf
          <input type="hidden" name="course_name" value="{{$title ?? 'Students Training Programme'}}">
          <input type="hidden" name="course_price" value="{{$main_price}}">
        <div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Full Name</span>
                    </label>
                    <input type="text" name="name" placeholder="Full Name" class="input input-bordered" required value="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Email Address</span>
                    </label>
                    <input type="text" name="email" placeholder="Email Address" class="input input-bordered" required value="{{ Auth::user()->email ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Mobile Number</span>
                    </label>
                    <input type="text" name="mobile" placeholder="Mobile Number" class="input input-bordered" required value="{{ Auth::user()->mobile ?? '' }}">
                </div>
        </div>
        <div class="modal-action">
            <button type="submit" class="btn btn-primary">Book Now</button>
            <a href="#" class="btn">Close</a>
        </div>
      </form>
    </div>
</div>
{{-- /Modal UI --}}
