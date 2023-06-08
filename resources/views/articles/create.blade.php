<x-app-layout>
    <x-slot name="header">
        @include('commons.errors')
        <form action="{{ route('articles.store') }}" method="post">
            @include('articles.form')
            <button type="submit">投稿する</button>
            <a href="{{ route('articles.index') }}">キャンセル</a>
        </form>
</x-app-layout>
