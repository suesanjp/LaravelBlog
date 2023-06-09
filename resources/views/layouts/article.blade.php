<!DOCTYPE html>
<html data-theme="cupcake" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="py-8 bg-primary">
        <div class="text-center">ミニブログ</div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">マイページ</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">ログイン</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">登録</a>
                    @endif
                @endauth
            </div>
        @endif
    </header>
    <main class="container py-10 px-40">
        {{ $slot }}
    </main>
    <footer class="text-center">
        &copy; Mini Blog
    </footer>
</body>

</html>
