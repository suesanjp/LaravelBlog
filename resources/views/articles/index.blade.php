<x-article-layout>

    @auth
        <p><a href="{{ route('articles.create') }}">記事を書く</a></p>
        <div class="grid grid-cols-4 gap-4">
        @endauth
        @foreach ($articles as $article)
            <article class="card w-46 bg-base-100 shadow-xl"">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <div>{{ $article->created_at }}</div>
                    <div claass="card-action">
                        <a class="btn" href="{{ route('articles.show', $article) }}">続きを読む</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-article-layout>
