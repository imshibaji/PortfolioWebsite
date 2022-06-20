<div class="flex flex-wrap lg:justify-start justify-items-stretch w-full py-2">
    @foreach ($posts as $post)
        <div class="flex-auto w-auto border border-gray-900 m-3" >
            <div class="card-body justify-between flex-auto p-2 pr-0 pb-0">
                <h2 class="h5 px-2"><a href="{{url($post->slug)}}">{{$post->title}}</a></h2>
                <div class="py-3 p-2">
                    {{-- {{$post->excerpt}} --}}
                    @foreach ($post->meta as $meta)
                        @if($meta->meta_key == '_yoast_wpseo_metadesc')
                            {{$meta->value}}
                        @endif
                    @endforeach
                </div>
                <div class="w-full flex-none text-right">
                    <a href="{{url($post->slug)}}" class="btn btn-sm btn-primary dark:bg-gray-900 dark:border-black mr-0 mb-0">Know More...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
