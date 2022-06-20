@extends('layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="flex justify-between flex-col md:flex-row mt-0">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            No Topic
        </h2>
        <div class="text-sm breadcrumbs">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/tutorial">All Tutorials</a>
              </li>
              <li>{{ $tutorial->title ?? 'No Topic' }}</li>
            </ul>
        </div>
    </div>
    <div class="mb-3 dark:text-white">
        <x-alert class="alert alert-success" />
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
    <div class="py-0">
        <div class="flex flex-col lg:flex-row mx-0 mb-0">
            <div class="w-full lg:w-9/12 lg:px-3 bg-white dark:bg-black overflow-hidden shadow-sm">
                <div class="flex flex-col p-3 justify-center h-50v bg-white border-b border-gray-200 dark:bg-black dark:border-black">
                    <h1 class="self-center">No Topic Avaliable Now</h1>
                    <h3 class="self-center">These Contents will be updated Soon...</h3>
                    <p class="self-center">You can subscribe me for get Notification</p>
                </div>
            </div>
            <div class="w-full lg:w-3/12 lg:px-3">
                @include('tutorial.teacher')
            </div>
        </div>
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
</div>
@endsection
