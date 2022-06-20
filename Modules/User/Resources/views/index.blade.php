@extends('user::layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="dark:text-white">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>
    <div class="mb-3 dark:text-white">
        <x-alert class="alert alert-success" />
    </div>
    <div class="py-0">
        <div class="max-w-7xl mx-0 mb-8">
            @include('user::components.dashboard')
        </div>
    </div>
</div>
@endsection
