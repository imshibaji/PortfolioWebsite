@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="flex lg:flex-row flex-col my-8">
        <div class="h-60v">
            <h1 class="self-center">Welcome to register</h1>
        </div>
        <div class="divider divider-vertical d-none"></div>
        @include('components.registration')
    </div>
</div>
@endsection
