    <header class="mb-10">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl" href="{{ route('articles.index') }}">Card Blog</a>
            </div>
            @if (Route::has('login'))
                <div class="sm:top-0 sm:right-0 text-right z-10">
                    @auth
                        <a class="btn btn-ghost border-primary mr-2" href="{{ route('articles.create') }}">記事を書く</a>
                        <div class="dropdown dropdown-bottom dropdown-end">
                            <label tabindex="0"
                                class="btn btn-ghost border-primary mr-4 hidden sm:flex">{{ Str::limit(Auth::user()->name, 12) }}
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg></label>
                            <label tabindex="0" class="mr-4 flex sm:hidden"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000" width="40px" height="40px" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                </svg></label>
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
                        <a href="{{ route('login') }}" class="btn btn-ghost border-primary mr-2">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-ghost border-primary mr-4">登録</a>
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
