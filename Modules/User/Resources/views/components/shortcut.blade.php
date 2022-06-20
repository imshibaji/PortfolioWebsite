<div class="p-6 bg-white border-b border-gray-200 dark:bg-black dark:border-black">
    @isset($img)
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="{{$img}}">
    @endisset
    @isset($subtitle)
        <h3 class="tracking-widest text-indigo-500 text-sm font-medium title-font p-0">{{$subtitle}}</h3>
    @endisset
    @isset($title)
        <h2 class="text-lg font-medium title-font text-gray-900 dark:text-gray-200 p-0">{{$title}}</h2>
    @endisset
    @isset($details)
        <div class="leading-relaxed text-base">{!! $details !!}</div>
    @endisset
    @isset($link)
          <a href="{{$link}}" class="btn btn-primary btn-sm w-full my-3">Learn More</a>
    @endisset
</div>
