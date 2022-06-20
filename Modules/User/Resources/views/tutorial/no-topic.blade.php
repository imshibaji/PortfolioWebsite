@extends('user::layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="flex justify-between flex-col md:flex-row mt-0">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            No Topic
        </h2>
        <div class="text-sm breadcrumbs">
            <ul>
              <li>
                <a href="/user">Home</a>
              </li>
              <li>
                <a href="/tutorials">All Tutorials</a>
              </li>
              <li>{{ $tutorial->title ?? 'No Topic' }}</li>
            </ul>
        </div>
    </div>
    <div class="mb-3 dark:text-white">
        <x-alert class="alert alert-success" />
    </div>
    <div class="py-0">
        <div class="mx-0 mb-16 sm:px-6 lg:px-8">
            <div class=" bg-white dark:bg-black overflow-hidden shadow-sm">
                <div class="flex justify-center h-50v bg-white border-b border-gray-200 dark:bg-black dark:border-black">
                    <h1 class="self-center">No Topic Avaliable Now</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
