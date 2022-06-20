<div class="flex w-full text-2xl pt-3">
    <div class="w-1/2">
        <h4>{{$title}}</h4>
        @if($offer_amt>0)
        Price: <del class="text-red-500">₹ {{$amt}}/-</del>
        <strong class="text-green-600">₹ {{ $amt -($amt * ($offer_amt/100)) }}/-</strong>
        @else
            Price: <strong class="text-green-500">₹ {{$amt}}/-</strong>
        @endif
    </div>
    <div class="w-1/2">Class Type: {{$ctype}}</div>
</div>
<div class="flex w-full text-xl pb-3">
    <div class="w-1/2">Prerequisist: {{$know}}</div>
    <div class="w-1/2">Class Duration: {{$duration}}</div>
</div>
<div class="w-full">
    <a href="#my-modal" class="btn btn-sm btn-primary dark:bg-black dark:border-black">Join Online Live Classes</a>
    <a href="#" class="btn btn-sm bg-blue-700 dark:bg-gray-800">Join Online Recording Class</a>
</div>
<div class="my-5">{!!$content !!}</div>
<div class="w-full mb-5">
    <a href="#my-modal" class="btn btn-sm btn-primary dark:bg-black dark:border-black">Join Online Live Classes</a>
    <a href="#" class="btn btn-sm bg-blue-700 dark:bg-gray-800">Join Online Recording Class</a>
</div>


{{-- Modal UI --}}
<div id="my-modal" class="modal">
    <div class="modal-box">
      <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque. Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p>
      <div class="modal-action">
        <a href="#" class="btn btn-primary">Accept</a>
        <a href="#" class="btn">Close</a>
      </div>
    </div>
</div>
{{-- /Modal UI --}}
