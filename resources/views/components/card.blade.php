<div class="w-full xl:w-1/3 md:w-1/2 p-2">
    <div class="bg-white dark:bg-black p-6 rounded-lg">
      @isset($img)
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="{{$img}}">
      @endisset
      @isset($subtitle)
        <h3 class="tracking-widest text-primary text-xs font-medium title-font p-0">{{$subtitle ?? 'SUBTITLE'}}</h3>
      @endisset
      @isset($title)
        <h2 class="text-lg text-gray-900 dark:text-gray-200 font-medium title-font p-0 mb-3">{{$title}}</h2>
      @endisset
      @isset($details)
        <div class="leading-relaxed text-base">{!! $details !!}</div>
      @endisset
      @isset($link)
          <a href="{{$link}}" class="btn btn-primary btn-sm w-full my-3">Learn More</a>
      @endisset
    </div>
</div>
