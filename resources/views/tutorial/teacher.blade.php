<div class="card bordered p-4 pb-1 pt-4">
    <div class="avatar flex flex-col justify-center items-center">
        <div class="rounded-full w-auto h-auto ring ring-primary ring-offset-base-100 ring-offset-8">
            <img src="https://cms.shibajidebnath.com/wp-content/themes/mynewtheme/assets/imgs/smilling_shib.jpg">
        </div>
        <h3 class="h6 mt-3 py-1 text-center">Shibaji Debnath</h3>
        <p class="text-sm mb-0 pb-0 text-center py-1">Software Engineer, Developer and Trainer</p>
        {{-- <h5 class="flex text-green-700 dark:text-yellow-300"><x-box-regular.mobile /><x-box-logos.whatsapp />+91-8981009499</h5> --}}
        {{-- <div class="text-center btn-group mt-1">
            <a href="https://www.youtube.com/c/ShibajiDebnath" class="btn btn-circle btn-xs pl-2"><x-box-logos.youtube /></a>
            <a href="https://www.facebook.com/iamshibaji" class="btn btn-circle btn-xs pl-2"><x-box-logos.facebook /></a>
            <a href="https://www.linkedin.com/in/shibaji" class="btn btn-circle btn-xs pl-2"><x-box-logos.linkedin /></a>
            <a href="https://github.com/imshibaji" class="btn btn-circle btn-xs pl-2"><x-box-logos.github /></a>
        </div> --}}
    </div>
</div>
<div class="card bordered p-4 pt-1 my-0">
    <a href="#sub-modal" class="btn btn-primary dark:bg-gray-900 dark:border-black">Subscribe Now</a>
</div>


{{-- Modal UI --}}
<div id="sub-modal" class="modal">
    <div class="modal-box">
      <h6 class="pb-0 mb-0 text-blue-600 text-xs">You can stay updated with me</h6>
      <h4 class="py-0 my-0">Subscribe for New Tutorials</h4>
      <form action="/trainings/demo" method="POST">
          @csrf
          <input type="hidden" name="purpose" value="Tutorials">
        <div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Full Name (required)</span>
                    </label>
                    <input type="text" name="name" placeholder="Full Name" class="input input-bordered" required value="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Email Address (required)</span>
                    </label>
                    <input type="text" name="email" placeholder="Email Address" class="input input-bordered" required value="{{ Auth::user()->email ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Mobile Number</span>
                    </label>
                    <input type="text" name="mobile" placeholder="Mobile Number" class="input input-bordered" value="{{ Auth::user()->mobile ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">For What (required)</span>
                    </label>
                    <input type="text" name="subject" placeholder="Why are you subscribe" class="input input-bordered" required value="{{ $title ?? '' }}">
                </div>
        </div>
        <div class="modal-action">
            <button type="submit" class="btn btn-primary">Subscribe Now</button>
            <a href="#" class="btn">Close</a>
        </div>
      </form>
    </div>
</div>
{{-- /Modal UI --}}
