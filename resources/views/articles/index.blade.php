<x-article-layout>
    @auth
        <a class="btn btn-accent mb-4 mx-9" href="{{ route('articles.create') }}">記事を書く</a>
    @endauth
    <div class="grid grid-cols-autofit gap-8">
        @foreach ($articles as $article)
            <article class="card w-56 shadow-xl bg-base-100 mx-auto">
                <div class="card-body h-56 relative">
                    <h2 class="card-title">{{ Str::limit($article->title, 20) }}</h2>
                    <div class="absolute bottom-4">
                        <div class="mb-2">{{ $article->created_at }}</div>
                        <div claass="card-action">
                            <a class="btn" href="{{ route('articles.show', $article) }}">続きを読む</a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-article-layout>
