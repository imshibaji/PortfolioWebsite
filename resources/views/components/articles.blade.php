<div class="flex flex-wrap overflow-hidden h-full -mx-2">
    @foreach ($posts as $post)
        <div class="lg:w-1/2 w-full my-2">
            <div class="h-full m-2 border border-primary dark:border-black relative">
                <div class="card-body justify-between flex-auto p-2 mb-5">
                    <h2 class="h5 px-2"><a href="{{url($post->slug)}}">{{$post->title}}</a></h2>
                    <div class="py-3 p-2">
                        {{$post->meta->_yoast_wpseo_metadesc ?? $post->excerpt ?? ''}}
                    </div>
                </div>
                <div class="w-full text-right absolute bottom-0 right-0">
                    <a href="{{url($post->slug)}}" class="btn btn-sm btn-primary dark:bg-gray-900 dark:border-black mr-0 mb-0">Know More...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
