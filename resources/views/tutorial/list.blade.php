@extends('layouts.base')

@section('content')
<div class="container pt-4 px-4">
    <div class="flex justify-between flex-col md:flex-row m-0">
        <div class="font-semibold text-gray-800 dark:text-white leading-tight">
            <h2 class="text-xl mb-0 pb-0">Learn Free Software Development Tutorials</h2>
            <h4 class="text-xs mt-0 pt-0 text-green-500">Tutorial Videos For Professional Developers</h4>
        </div>
        <div class="text-sm breadcrumbs">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              {{-- <li>
                <a href="/tutorials">All Tutorials</a>
              </li> --}}
              <li>All Tutorials</li>
            </ul>
        </div>
    </div>
    <div class="dark:text-white">
        <x-alert class="alert alert-success" />
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
    <div class="py-0">
        <div class="mx-0 mb-0">
            <div class="flex flex-wrap my-4 w-full">
                @foreach($tutorials as $tut)
                    @if($tut->meta->ispublished == "Publish" && $tut->meta->ispaid == "Free")
                        @include('components.card', [
                            // 'img' => 'https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg',
                            'title' => $tut->term->name,
                            'details' => $tut->description,
                            'link' => '/tutorial/'.$tut->slug
                        ])
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="py-2">
        @include('tutorial.top-ads')
    </div>
</div>
@endsection
