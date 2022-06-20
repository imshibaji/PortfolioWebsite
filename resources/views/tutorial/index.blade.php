@extends('layouts.base')

@section('content')
<div class="container pt-4">
    <div class="flex justify-between flex-col md:flex-row px-4 dark:text-white">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ $course_title ?? 'Dashboard' }}
        </h2>
        <div class="text-sm breadcrumbs">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/tutorial">All Tutorials</a>
              </li>
              <li>{{ $tutorial->title ?? 'Topic Name' }}</li>
            </ul>
        </div>
    </div>
    <div class="dark:text-white">
        <x-alert class="bg-green-700 text-green-100 p-4" />
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
    <div class="py-0">
        <div class="mx-0 mb-0">
            @include('tutorial.dashboard')
        </div>
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
</div>
@endsection
