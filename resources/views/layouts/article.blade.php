<x-head-layout>
    @include('components.header')
    <main class="container max-w-screen-xl px-4 mx-auto">
        {{ $slot }}
    </main>
    </div>
    @include('components.footer')
</x-head-layout>
