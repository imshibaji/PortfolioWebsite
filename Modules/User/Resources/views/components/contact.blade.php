<h3>Appointment Booking</h3>

{{-- <x-alert /> --}}

<form action="/user/contact" method="POST" class="my-2">
    @csrf
    @honeypot
<input type="hidden" name="subject" value="Meeting Enquiry"/>
<div class="form-control w-full">
    <label class="label">
        <span class="label-text">Your Name (required)</span>
    </label>
    <input type="text" name="name" placeholder="Your Full name" value="{{Auth::user()->name}}" required class="input input-primary input-bordered border border-primary dark:border-black w-full">
</div>
<div class="form-control w-full">
    <label class="label">
        <span class="label-text">Your Email (required)</span>
    </label>
    <input type="email" name="email" placeholder="Your Email Address" value="{{Auth::user()->email}}" required class="input input-primary input-bordered border border-primary dark:border-black w-full">
</div>
<div class="form-control w-full">
    <label class="label">
        <span class="label-text">Your Contact Number (Optional)</span>
    </label>
    <input type="text" name="mobile" placeholder="Your Mobile Number" class="input input-primary input-bordered border border-primary dark:border-black w-full">
</div>
<div class="form-control w-full">
    <label class="label">
        <span class="label-text">Why You Meet with me (required)</span>
    </label>
    <input type="text" name="meeting_purpose" placeholder="Your Metting Purpose" required class="input input-primary input-bordered border border-primary dark:border-black w-full">
</div>
<div class="form-control w-full">
    <label class="label">
        <span class="label-text">Metting Schedule (required)</span>
    </label>
    <div class="row">
        <span class="col-3 mr-2 mt-2">Primary</span>
        <div class="row">
            <input type="date" name="meeting_date" placeholder="Metting Date" required class="col input input-primary input-bordered border border-primary dark:border-black w-full">
            <input type="time" name="meeting_time" placeholder="Metting Time" required class="col input input-primary input-bordered border border-primary dark:border-black w-full">
        </div>
    </div>
    <hr class="my-3"/>
    <div class="row">
        <span class="col-3 mr-2 mt-2">Another</span>
        <div class="row">
            <input type="date" name="another_meeting_date" placeholder="Metting Date" class="col input input-primary input-bordered border border-primary dark:border-black w-full">
            <input type="time" name="another_meeting_time" placeholder="Metting Time" class="col input input-primary input-bordered border border-primary dark:border-black w-full">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary dark:bg-green dark:border-black mt-5">Send Now</button>
</form>
