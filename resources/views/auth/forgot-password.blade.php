@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="flex justify-center w-full">
        <div class="flex w-full lg:w-1/2 my-5 h-50v">
            <form class="w-full" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-6 text-sm">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
