<div class="card bordered p-4">
    <div class="avatar flex flex-col justify-center items-center">
        <div class="rounded-full w-60 h-60 ring ring-primary ring-offset-base-100 ring-offset-8">
            <img src="{{env('CMS_URL')}}/wp-content/themes/mynewtheme/assets/imgs/smilling_shib.jpg">
        </div>
        <h3 class="h5 mt-3 py-1">Shibaji Debnath</h3>
        <p class="h6 mb-2 text-center py-1">Freelance Software/Application Enginner and Developer</p>
        {{-- Training --}}
        @if((request()->is('online-training') || (request()->is('trainings/*'))))
        <p class="text-center mb-2 py-1">I make people aware about core knowledge and concepts about programming and technology. I don't care about theories, conventions or anything all.</p>
        @endif
        {{-- <h5 class="flex text-green-700 dark:text-yellow-300"><x-box-regular.mobile /><x-box-logos.whatsapp />+91-8981009499</h5> --}}
        <div class="text-center btn-group mt-1">
            <a href="https://www.youtube.com/c/ShibajiDebnath" class="btn btn-ghost btn-xs"><x-box-logos.youtube /> Youtube</a>
            <a href="https://www.facebook.com/iamshibaji" class="btn btn-ghost btn-xs"><x-box-logos.facebook /> Facebook</a>
            <a href="https://www.linkedin.com/in/shibaji" class="btn btn-ghost btn-xs"><x-box-logos.linkedin /> LinkedIn</a>
            <a href="https://github.com/imshibaji" class="btn btn-ghost btn-xs"><x-box-logos.github /> Github</a>
        </div>
    </div>
</div>
<div class="card bordered p-4 mt-2">
    {{-- <a href="#sub-modal" class="btn btn-primary dark:bg-gray-900 dark:border-black">Subscribe for Demo Session</a> --}}
    <a href="/project/create" class="btn btn-primary dark:bg-gray-900 dark:border-black">Hire Me for Project</a>
</div>


{{-- Modal UI --}}
{{-- <div id="sub-modal" class="modal">
    @php
        $amt=500;
    @endphp
    <div class="modal-box">
      <h6 class="pb-0 mb-0 text-blue-600 text-xs">You can stay updated with me</h6>
      <h4 class="py-0 my-0">Book for Demo Session</h4>
      <p>Price: <strong class="text-green-500">₹ {{number_format($amt, 2)}}/-</strong> for 30 Minutes</p>
      <form action="/trainings/enquery" method="POST">
          @csrf
          <input type="hidden" name="course_name" value="Demo Session">
          <input type="hidden" name="course_price" value="{{$amt}}">
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
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">For What</span>
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
</div> --}}
{{-- /Modal UI --}}
