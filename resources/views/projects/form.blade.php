@if(Session::has('status'))
<div class="alert alert-success mb-5">
    <div class="flex-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
      </svg>
      <label>{{ Session::get('status') }}</label>
    </div>
</div>
@endif
<div class="flex">
    <div class="flex flex-col w-full">
      {{-- <h6 class="pb-0 mb-0 text-blue-600 text-xs">Input your information for</h6> --}}
      <h4 class="py-0 my-0">Give Details about Project</h4>
      <form action="/project/enquiry" method="POST">
            @csrf
            <input type="hidden" name="subject" value="Project Requirements">
            <div class="flex flex-wrap overflow-hidden">
                <div class="w-full px-2 form-control">
                    <h5 class="mb-0 pb-0">Contact Details</h5>
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Full Name</span>
                    </label>
                    <input type="text" name="name" placeholder="Full Name" class="input input-bordered" required value="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Email Address</span>
                    </label>
                    <input type="text" name="email" placeholder="Email Address" class="input input-bordered" required value="{{ Auth::user()->email ?? '' }}">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Mobile Number</span>
                    </label>
                    <input type="text" name="mobile" placeholder="Mobile Number" class="input input-bordered" required value="{{ Auth::user()->mobile ?? '' }}">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">WhatsApp Number</span>
                    </label>
                    <input type="text" name="whatsapp" placeholder="WhatsApp Number" class="input input-bordered">
                </div>
                <div class="w-full px-2 form-control">
                    <h5 class="mb-0 pb-0">Project Details</h5>
                </div>
                <div class="w-full lg:w-2/3 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Project Name</span>
                    </label>
                    <input type="text" name="project_name" placeholder="Project Name" required class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/3 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Project Type</span>
                    </label>
                    <input type="text" name="project_type" placeholder="Project Type" required class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Domain Require?</span>
                    </label>
                    <input type="text" name="domain" placeholder="Domain Require" required class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Hosting Require?</span>
                    </label>
                    <input type="text" name="hosting" placeholder="Hosting Require" required class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/2 px-2 flex">
                    <div class="flex flex-wrap overflow-hidden w-full">
                        <div class="form-control w-1/2 sm:w-1/3">
                            <label class="label">
                                <span class="label-text">Choose Currency</span>
                            </label>
                            <select name="currency" required class="select select-bordered w-full max-w-xs">
                                <option value="" disabled="disabled" selected="selected">Currency</option>
                                <option>INR</option>
                                <option>USD</option>
                                <option>GBP</option>
                            </select>
                        </div>
                        <div class="form-control w-1/2 sm:w-2/3">
                            <label class="label">
                            <span class="label-text">Minimum Budgets</span>
                            </label>
                            <input type="text" name="min_budget" placeholder="Your Minimum Budgets" required class="input input-bordered">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Maximum Budgets</span>
                    </label>
                    <input type="text" name="max_budget" placeholder="Your Maximum Budgets" class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Referance Link(If any)</span>
                    </label>
                    <input type="text" name="referance_link" placeholder="Referance Link(If any)" class="input input-bordered">
                </div>
                <div class="w-full lg:w-1/2 px-2 form-control">
                    <label class="label">
                    <span class="label-text">Technologies Rquirement(If any)</span>
                    </label>
                    <input type="text" name="technologies_needs" placeholder="Technologies Rquirement(If any spacific)" class="input input-bordered">
                </div>
                <div class="w-full px-2 form-control">
                    <label class="label">
                    <span class="label-text">Project Details / Full Notes / Requirement Details</span>
                    </label>
                    <textarea name="project_details" placeholder="Project Details / Full Notes / Requirement Details" required class="textarea h-60 textarea-bordered"></textarea>
                </div>
                <div class="w-full px-2 form-control">
                    <label class="flex py-3">
                        <input type="checkbox" name="agree" class="checkbox" required>
                        <span class="label-text pl-2"> Yes! This is all my requirements. I need to callback from you.</span>
                    </label>
                </div>
            </div>
            <div class="modal-action">
                <button type="submit" class="btn btn-primary">Enquiry Now</button>
                <a href="#" class="btn">Close</a>
            </div>
      </form>
    </div>
</div>
