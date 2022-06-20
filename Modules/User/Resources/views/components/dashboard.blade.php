<script defer src="https://sdk.mixmax.com/v2.0.6/widgets.umd.min.js"></script>
<div class="flex flex-col lg:flex-row w-full gap-5">

    <div class="w-full lg:w-9/12 overflow-hidden bg-white dark:bg-black shadow-sm">
        <div class="p-6 bg-white border-b border-gray-200 dark:bg-black dark:border-black">
            {{-- <h4>Welcome My Page</h4>
            <p>This is the page title</p> --}}
            <div class="mixmax-embedded-calendar" data-user-calendar-link="shibajidebnath" data-calendar-link="30" data-width="100%" data-height="780px"></div>
        </div>
    </div>

    <div class="w-full lg:w-3/12 overflow-hidden bg-white dark:bg-black shadow-sm">
        @include('user::components.shortcut', [
            // 'img' => 'https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg',
            'title' => 'Need Software Development for Business Solution',
            'subtitle' => 'Book Time slot for Project discussion',
            'details' => 'If you want get Software solution for your business then book now your time.',
            'link' => '/contact'
        ])
        @include('user::components.shortcut', [
            // 'img' => 'https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg',
            'title' => 'Students Training Program',
            'subtitle' => 'Online Course',
            'details' => '12 Month Complete Software Developers Diploma Training. Book now your Seat.',
            'link' => '/students-training-programme'
        ])

        @include('user::components.shortcut', [
            // 'img' => 'https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg',
            'title' => 'Proffesional Software Developer Training Support',
            'subtitle' => '1 to 1 Training Program Online',
            'details' => 'If you want get Online Training 1 to 1 for Career Growth Then book your time. for class',
            'link' => '/online-training'
        ])

    </div>

</div>


