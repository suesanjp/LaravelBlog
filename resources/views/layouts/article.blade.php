<!DOCTYPE html>
<html data-theme="corporate" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Blog - Blog Portfolio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-200 font-jp">
    <header class="mb-10">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl" href="{{ route('articles.index') }}">Card Blog</a>
            </div>
            @if (Route::has('login'))
                <div class="sm:top-0 sm:right-0 text-right z-10">
                    @auth
                        <a class="btn mr-6" href="{{ route('articles.create') }}">記事を書く</a>
                        <div class="dropdown dropdown-bottom dropdown-end">
                            <label tabindex="0" class="btn ml-1">{{ Auth::user()->name }}</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li>
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">登録</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        {{-- Background Image --}}
        <div class="hero min-h-fit" style="background-image: url('/images/empire.webp');">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md my-8">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                        exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    </header>

    <main class="container max-w-screen-xl px-4 mx-auto">
        {{ $slot }}
    </main>
    </div>
    <footer class="footer mt-20 p-10 bg-neutral text-neutral-content">
        <div>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>Copyright © 2023 Sue <br> All Rights Reserved.</p>
        </div>
        <div class="mx">
            <span class="footer-title">repository</span>
            <a href="https://github.com/suesanjp/LaravelBlog"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <path style=" stroke:none;fill-rule:evenodd;fill:rgb(100%,100%,100%);fill-opacity:1;"
                        d="M 11.964844 0 C 5.347656 0 0 5.5 0 12.304688 C 0 17.742188 3.425781 22.347656 8.179688 23.976562 C 8.773438 24.097656 8.992188 23.710938 8.992188 23.386719 C 8.992188 23.101562 8.972656 22.125 8.972656 21.105469 C 5.644531 21.839844 4.953125 19.636719 4.953125 19.636719 C 4.417969 18.210938 3.625 17.84375 3.625 17.84375 C 2.535156 17.089844 3.703125 17.089844 3.703125 17.089844 C 4.914062 17.171875 5.546875 18.355469 5.546875 18.355469 C 6.617188 20.226562 8.339844 19.699219 9.03125 19.371094 C 9.132812 18.578125 9.449219 18.027344 9.785156 17.722656 C 7.132812 17.4375 4.339844 16.378906 4.339844 11.652344 C 4.339844 10.308594 4.8125 9.207031 5.566406 8.351562 C 5.445312 8.046875 5.03125 6.785156 5.683594 5.09375 C 5.683594 5.09375 6.695312 4.765625 8.972656 6.355469 C 9.949219 6.085938 10.953125 5.949219 11.964844 5.949219 C 12.972656 5.949219 14.003906 6.089844 14.957031 6.355469 C 17.234375 4.765625 18.242188 5.09375 18.242188 5.09375 C 18.898438 6.785156 18.480469 8.046875 18.363281 8.351562 C 19.136719 9.207031 19.589844 10.308594 19.589844 11.652344 C 19.589844 16.378906 16.796875 17.417969 14.125 17.722656 C 14.558594 18.109375 14.933594 18.84375 14.933594 20.003906 C 14.933594 21.65625 14.914062 22.980469 14.914062 23.386719 C 14.914062 23.710938 15.132812 24.097656 15.726562 23.976562 C 20.480469 22.347656 23.910156 17.742188 23.910156 12.304688 C 23.929688 5.5 18.558594 0 11.964844 0 Z M 11.964844 0 " />
                </svg></a>
        </div>
    </footer>
</body>

</html>
