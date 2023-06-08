<x-app-layout>
    <x-slot name="header">
        @include('commons.errors')
        <form action="{{ route('articles.update', $article) }}" method="post">
            @method('patch')
            @include('articles.form')
            <button type="submit">更新する</button>
            <a href="{{ route('articles.show', $article) }}">キャンセル</a>
        </form>
</x-app-layout>
