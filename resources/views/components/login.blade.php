{{-- Login --}}
<div class="flex-1 w-full lg:w-1/2">
    <form class="mx-4" action="{{ route($action ?? 'login') }}" method="post">
        @csrf
        @honeypot
        @if(isset($product_amt) && isset($product_name))
            <input type="hidden" name="product_name" value="{{$product_name}}">
            <input type="hidden" name="product_amt" value="{{$product_amt}}">
        @endif
        <h3>Login</h3>
        <div class="flex flex-col">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="text" name="email" placeholder="Email" class="input input-bordered" value="{{old('email')}}">
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
                <input type="password" name="password" placeholder="Password" class="input input-bordered">
                @if ($errors->has('password'))
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $errors->first('password') }}</span>
                    </label>
                @endif
            </div>
            <div class="flex flex-col py-2">
                <!-- Remember Me -->
                <div class="my-4 label">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                    </label>
                    <div class="label-text-alt">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>
