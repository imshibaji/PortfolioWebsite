<div class="card bordered">
    {{-- <h5 class="pb-0 mb-0 text-blue-600 text-left">Best Features</h5> --}}
    <div class="aspect-w-16 aspect-h-9 bg-black">
        <img class="w-full" src="{{$post->image ?? 'https://cms.shibajidebnath.com/wp-content/uploads/2021/10/no-image.jpeg'}}" alt="{{$post->post_title}}">
    </div>
    <p class="my-2 mb-0 px-4">{{$post->post_excerpt}}</p>
    @if ($post->meta->actual_price)
        <p class="my-0 px-4">Starting Cost: <strong class=" text-green-500">₹{{$post->meta->actual_price}}</strong> or <strong class=" text-green-500">${{$post->meta->actual_price_usd}}</strong></p>
    @endif
    {{-- <a href="{{$post->meta->demo_link ?? '#'}}" target="_blank" class="btn btn-warning bg-yellow-500 dark:bg-yellow-900 text-white btn-sm">Demo Link</a>
    <a href="#download-modal" class="btn btn-success dark:bg-green-900 text-white btn-sm">Download Soucecode</a> --}}
</div>

{{-- Modal UI --}}
<div id="download-modal" class="modal">
    <div class="modal-box">
      <h6 class="pb-0 mb-0 text-blue-600 text-xs">Input your information for</h6>
      <h4 class="py-0 my-0">Sourcecode Download</h4>
      <form action="/project/download" method="POST">
            @csrf
            <input type="hidden" name="subject" value="Sourcecode Download">
            <input type="hidden" name="pid" value="{{$post->ID}}">
            <input type="hidden" name="purpose" value="{{ $title ?? '' }}">
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
                <button type="submit" class="btn btn-primary">Download Now</button>
                <a href="#" class="btn">Close</a>
            </div>
      </form>
    </div>
</div>
{{-- /Modal UI --}}
