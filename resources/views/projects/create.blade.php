@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="flex lg:flex-row flex-col">
        <div class="lg:w-9/12 w-auto lg:px-5">
            <div class="flex flex-col lg:flex-row w-full items-center">
                <div class="w-full lg:w-1/2">
                    <h1 class="h3 my-0">Project Requirements</h1>
                </div>
                <div class="w-full lg:w-1/2 lg:text-right">
                    <a href="/my-projects" class="btn btn-primary btn-sm self-center">Back to All Project</a>
                </div>
            </div>
            <hr class="border border-primary dark:border-white">
            <div class="my-2 mb-8">
                @include('projects.form')
            </div>
        </div>
        <div class="lg:w-3/12 w-auto py-5">
            <div class="px-2">
                @include('projects.developer')
            </div>
            <div class="px-2">
                <x-client-testimonial-slider limit="1" />
            </div>
        </div>
    </div>
</div>
@endsection
