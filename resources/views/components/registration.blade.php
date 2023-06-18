{{-- Registration --}}
<div class="flex-1 w-full lg:w-1/2">
    <form class="mx-4" action="{{ route($action ?? 'register') }}" method="post">
        @csrf
        @honeypot
        @if(isset($product_amt) && isset($product_name))
            <input type="hidden" name="product_name" value="{{$product_name}}">
            <input type="hidden" name="product_amt" value="{{$product_amt}}">
        @endif

        <h3>Registration</h3>
        <!-- Validation Errors -->
        {{-- {{$status}} --}}
        @if (session('status'))
        <div class="alert alert-success">
            <div class="flex-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
              </svg>
              <label>{{session('status')}}</label>
            </div>
        </div>
        @endif
        <div class="flex flex-col">
            <div class="form-control">
                <label class="label">
                <span class="label-text">Full Name</span>
                </label>
                <input type="text" name="name" placeholder="Full Name" class="input input-bordered" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $errors->first('name') }}</span>
                    </label>
                @endif
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" placeholder="Email" class="input input-bordered" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $errors->first('email') }}</span>
                    </label>
                @endif
            </div>
            <div class="form-control">
                <label class="label">
                <span class="label-text">Password</span>
                </label>
                <input type="password" name="password" placeholder="Password" class="input input-bordered" value="{{old('password')}}">
                @if ($errors->has('password'))
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $errors->first('password') }}</span>
                    </label>
                @endif
            </div>
            <div class="form-control">
                <label class="label">
                <span class="label-text">Confirm Password</span>
                </label>
                <input type="password" name="password_confirmation" placeholder="Password" class="input input-bordered" value="{{old('password_confirmation')}}">
                @if ($errors->has('password_confirmation'))
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $errors->first('password_confirmation') }}</span>
                    </label>
                @endif
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>
    </form>
</div>
