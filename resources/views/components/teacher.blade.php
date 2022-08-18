@if(request()->is('contact'))
<div class="card bordered p-4 mt-2">
    <div class="avatar flex flex-col justify-center items-center">
        <div class="rounded-full w-60 h-60 ring ring-primary ring-offset-base-100 ring-offset-8">
            <img src="https://cms.shibajidebnath.com/wp-content/themes/mynewtheme/assets/imgs/smilling_shib.jpg">
        </div>
        <h3 class="h3 text-center mt-3 py-1">Shibaji Debnath</h3>
        <p class="h6 mb-2 text-center py-1">Ex Google Software Developer and Instructor</p>
            <p><strong>Mobile:</strong> +91-8981009499</p>
            <p><strong>Address:</strong> 438/18B, Chotofinga, Sabitri Pally, Bishorpara, West Bengal 700110. Near Leningorgh. </p>
            <p>Visiting Time: 10.00pm to 7.00pm (Tue to Fri) And 3.00pm to 8.00pm (Sat, Sun).</p>
    </div>
</div>
@else
<div class="card bordered p-4">
    <div class="avatar flex flex-col justify-center items-center">
        <div class="rounded-full w-60 h-60 ring ring-primary ring-offset-base-100 ring-offset-8">
            <img src="https://cms.shibajidebnath.com/wp-content/themes/mynewtheme/assets/imgs/smilling_shib.jpg">
        </div>
        <h3 class="h3 text-center mt-3 py-1">Shibaji Debnath</h3>
        <p class="h6 mb-2 text-center py-1">Ex Google Software Developer and Instructor</p>
        {{-- Training --}}
        @if((request()->is('online-training') || (request()->is('trainings/*'))))
        <p class="text-center mb-2 py-1">I make people aware about core knowledge and concepts about programming and technology. I don't care about theories, conventions or anything all.</p>
        @endif
        {{-- <h5 class="flex text-green-700 dark:text-yellow-300"><x-box-regular.mobile /><x-box-logos.whatsapp />+91-8981009499</h5> --}}
        <div class="text-center btn-group mt-1">
            <a href="https://www.youtube.com/c/ShibajiDebnath?sub_confirmation=1" target="_blank" class="btn btn-ghost btn-xs"><x-box-logos.youtube /> Youtube</a>
            <a href="https://www.facebook.com/iamshibaji" target="_blank" class="btn btn-ghost btn-xs"><x-box-logos.facebook /> Facebook</a>
            <a href="https://www.linkedin.com/in/shibaji" target="_blank" class="btn btn-ghost btn-xs"><x-box-logos.linkedin /> LinkedIn</a>
            <a href="https://github.com/imshibaji" target="_blank" class="btn btn-ghost btn-xs"><x-box-logos.github /> Github</a>
        </div>
    </div>
</div>
{{-- Subscribe --}}
<div class="card bordered p-4 mt-2">
    <a href="#sub-modal" class="btn btn-primary dark:bg-gray-900 dark:border-black">Book for Demo Session</a>
</div>
@endif


{{-- Modal UI --}}
<div id="sub-modal" class="modal">
    @php
        $amt=500;
    @endphp
    <div class="modal-box">
      <h6 class="pb-0 mb-0 text-blue-600 text-xs">You can stay updated with me</h6>
      <h4 class="py-0 my-0">Book for Demo</h4>
      {{-- <p>Price: <strong class="text-green-500">₹ {{number_format($amt, 2)}}/-</strong> for 30 Minutes</p> --}}
      <form action="/trainings/enquery" method="POST">
          @csrf
          <input type="hidden" name="course_name" value="Demo Session">
          {{-- <input type="hidden" name="course_price" value="{{$amt}}"> --}}
        <div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Full Name<span style="color: red">*</span></span>
                    </label>
                    <input type="text" name="name" placeholder="Full Name" class="input input-bordered" required value="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Email Address<span style="color: red">*</span></span>
                    </label>
                    <input type="text" name="email" placeholder="Email Address" class="input input-bordered" required value="{{ Auth::user()->email ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Mobile Number<span style="color: red">*</span></span>
                    </label>
                    <input type="text" name="mobile" placeholder="Mobile Number" class="input input-bordered" required value="{{ Auth::user()->mobile ?? '' }}">
                </div>
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">For What<span style="color: red">*</span></span>
                    </label>
                    {{-- <input type="text" name="subject" placeholder="Why are you subscribe" class="input input-bordered" required value="{{ $title ?? '' }}"> --}}
                    <input type="text" name="subject" placeholder="eg. Customized Software / Website / join training sessions" class="input input-bordered" required>
                </div>
        </div>
        <div class="modal-action">
            <button type="submit" class="btn btn-primary">Send Now</button>
            <a href="#" class="btn">Close</a>
        </div>
      </form>
    </div>
</div>
{{-- /Modal UI --}}
