<x-article-layout>
    <x-slot name="header">
        @include('commons.errors')
        <form action="{{ route('articles.store') }}" method="post">
            @include('articles.form')
            <button class="btn btn-primary" type="submit">投稿する</button>
            <a class="btn border-primary" href="{{ route('articles.index') }}">キャンセル</a>
        </form>
</x-article-layout>
