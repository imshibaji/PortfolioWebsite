<div class="navbar my-navbar fixed w-full z-10">
    <div class="container mx-auto">
        <div class="flex flex-1 px-2 mx-2">
            <a class="flex" href="/">
                <div class="avatar mr-1">
                    <div class="avatar-circle">
                        <img class="" src="https://cms.shibajidebnath.com/wp-content/themes/mynewtheme/assets/imgs/app-icon-114.png">
                    </div>
                </div>
                <div class="ml-1">
                    <span class="logo-start">Shibaji</span><span class="logo-end">Debnath</span><span class="text-green-400 dark:text-blue-600">.com</span>
                </div>
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-row">
                <a href="/user" class="navbar-item btn-creative {{ request()->is('/user') ? 'btn-active' : '' }}">
                    <x-icon-home /> Dashboard
                </a>
                <a href="/user/learning" class="navbar-item btn-creative {{ request()->is('/user/learning') ? 'btn-active' : '' }}">
                    <x-cool-sketch />  Learning Area
                </a>
                <a href="/user/profile" class="navbar-item btn-creative {{ request()->is('/user/profile') ? 'btn-active' : '' }}">
                    <x-box-regular.user-pin /> Profile
                </a>
                <x-logout class="navbar-item btn-creative {{ request()->is('logout') ? 'btn-active' : '' }}">
                    <x-box-regular.exit /> Logout
                </x-logout>
            </div>
        </div>

        {{-- Dropdown Start --}}
        <div x-data="{ open: false }" @click.away="open = false" class="my-dropdown">
            <button @click="open = !open" class="dropdown-btn">
                <x-line-menu />
            </button>
            <div x-show="open" class="dropdown-content">
                <div class="dropdown-item">
                    <li class="btn-creative"><a href="/"><x-icon-home /> Dashboard</a></li>
                    <li class="btn-creative"><a href="/user/learning"><x-cool-sketch /> Learning Area</a></li>
                    <li class="btn-creative"><a href="/user/profile"><x-box-regular.user-pin /> Profile</a></li>
                    <li class="btn-creative"><x-logout class="flex flex-1 px-1 py-5"><x-box-regular.exit /> Logout</x-logout></li>
                </div>
            </div>
        </div>
        {{-- Dropdown End --}}
    </div>
</div>

<div class="pad-top-60">
    {{-- @if($diff>0)
        @include('layouts.offer')
    @endif --}}
</div>

{{-- Page Down
<div class="flex flex-col">
    <div class="relative">
        <div class="mt-20 p-2 shadow menu dropdown-content bg-base-100 w-full">
            <li><a><x-eos-chat-o /> Contact</a></li>
            <li><a><x-eos-chat-o /> Contact</a></li>
            <li><a><x-eos-chat-o /> Contact</a></li>
            <li><a><x-eos-chat-o /> Contact</a></li>
        </div>
    </div>
</div>
--}}

{{--
<script>
let isDark = true;
function darkLight() {
    const html = document.querySelector('html');
    if(isDark){
        html.setAttribute('data-theme', 'dark');
    }else{
        html.setAttribute('data-theme', 'emerald');
    }
    isDark = !isDark;
}
</script>
--}}
