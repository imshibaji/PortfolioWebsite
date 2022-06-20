@extends('user::layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="mt-0">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Privacy Section') }}
        </h2>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-0 mb-16 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-black dark:border-black">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
