<x-article-layout>
    <div class="grid grid-cols-autofit gap-14">
        @foreach ($articles as $article)
            <article class="bg-base-100 card w-72 shadow-xl mx-auto">
                <div class="card-body relative">
                    <h2 class=" card-title">{{ Str::limit($article->title, 20) }}</h2>
                    <p class="h-36">{{ Str::limit($article->body, 120) }}</p>
                    <div class="text-sm mb-2">{{ $article->created_at->format('Y/m/d H:i') }}</div>
                    <div class="card-actions justify-end">
                        <a class="btn" href="{{ route('articles.show', $article) }}">続きを読む</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-article-layout>
