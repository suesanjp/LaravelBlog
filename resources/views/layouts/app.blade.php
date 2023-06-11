    <x-head-layout>
    <!-- Page Heading -->
    @if (isset($header))
        @include('components.header')
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
@include('components.footer')
    </x-head-layout>