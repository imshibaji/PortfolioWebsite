@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="w-full text-center">
        <h5>Already you are existing user then Login. And If you are the Register now.</h5>
    </div>
    <div class="divider"></div>
    <div class="flex lg:flex-row flex-col mb-5">
        @include('components.login')
        <div class="divider lg:divider-vertical"></div>
        @include('components.registration')
    </div>
</div>

@endsection
