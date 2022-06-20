<div class="bg-base-200">
    <ul class="menu py-3 rounded-box">
      <li class="menu-title pl-0">
        <span>Course Index</span>
      </li>
      @foreach ($tutorials as $tut)
        <li class="p-0 m-0">
            <a href="{{url('tutorial/'.$catagory.'/'.$tut->slug)}}">
                {{-- <x-cool-sketch /> --}}
                {{ $tut->title }}
            </a>
        </li>
        <div class="divider p-0 m-0"></div>
      @endforeach
    </ul>
  </div>
