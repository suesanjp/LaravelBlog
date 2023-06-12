    <x-head-layout>
    <!-- Page Heading -->
    @if (isset($header))
        @include('components.header')
    @endif

    <!-- Page Content -->
    <main class="container max-w-screen-xl px-4 mx-auto">
        {{ $slot }}
    </main>
@include('components.footer')
    </x-head-layout>