<div class="navbar my-navbar fixed w-full z-10">
    <div class="container">
        <div class="flex flex-1 px-2 mx-2">
            <a class="flex" href="/">
                <div class="avatar mr-1">
                    <div class="avatar-circle">
                        <img class="" src="https://www.shibajidebnath.com/wp-content/themes/mynewtheme/assets/imgs/app-icon-114.png">
                    </div>
                </div>
                <div class="ml-1">
                    <span class="logo-start">Shibaji</span><span class="logo-end">Debnath</span><span class="text-green-400 dark:text-blue-600">.com</span>
                </div>
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-row">
                <a href="/" class="navbar-item btn-creative {{ request()->is('/') ? 'btn-active' : '' }}">
                    <x-icon-home /> Home
                </a>
                <a href="/articles" class="navbar-item btn-creative {{ request()->is('articles') ? 'btn-active' : '' }}">
                    <x-eos-products />  Articles
                </a>
                <a href="/online-training" class="navbar-item btn-creative {{ request()->is('online-training') ? 'btn-active' : '' }}">
                    <x-eos-school-o /> Online Learning
                </a>
                <a href="/my-projects" class="navbar-item btn-creative {{ request()->is('my-projects') ? 'btn-active' : '' }}">
                    <x-cool-sketch /> Projects
                </a>
                <a href="/about-me" class="navbar-item btn-creative {{ request()->is('about-me') ? 'btn-active' : '' }}">
                    <x-box-regular.user-pin /> About Me
                </a>
                <a href="/contact" class="navbar-item btn-creative {{ request()->is('contact') ? 'btn-active' : '' }}">
                    <x-eos-chat-o /> Contact
                </a>
            </div>
        </div>

        {{-- Dropdown Start --}}
        <div x-data="{ open: false }" @click.away="open = false" class="my-dropdown">
            <button @click="open = !open" class="dropdown-btn">
                <x-line-menu />
            </button>
            <div x-show="open" class="dropdown-content">
                <div class="dropdown-item">
                    <li class="btn-creative"><a href="/"><x-icon-home /> Home</a></li>
                    <li class="btn-creative"><a href="/articles"><x-eos-products />  Articles</a></li>
                    <li class="btn-creative"><a href="/online-training"><x-eos-school-o /> Online Learning</a></li>
                    <li class="btn-creative"><a href="/my-projects"><x-cool-sketch /> Projects</a></li>
                    <li class="btn-creative"><a href="/about-me"><x-box-regular.user-pin /> About Me</a></li>
                    <li class="btn-creative"><a href="/contact"><x-eos-chat-o /> Contact</a></li>
                </div>
            </div>
        </div>
        {{-- Dropdown End --}}
    </div>
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
