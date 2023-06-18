@extends('user::layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="flex justify-between flex-col md:flex-row mt-0">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Learning Section
        </h2>
        <div class="text-sm breadcrumbs">
            <ul>
              <li>
                <a href="/user">Home</a>
              </li>
              {{-- <li>
                <a href="/tutorials">All Tutorials</a>
              </li> --}}
              <li>All Tutorials</li>
            </ul>
        </div>
    </div>
    <div class="mb-3 dark:text-white">
        <x-alert class="alert alert-success" />
    </div>
    <div class="py-0">
        <div class="mx-0 mb-16">
            <div class="flex flex-wrap my-4">
                @foreach($tutorials as $tut)
                    @include('user::components.card', [
                        // 'img' => 'https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg',
                        'title' => $tut->term->name,
                        'details' => $tut->description,
                        'link' => '/tutorials/'.$tut->slug
                    ])
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
