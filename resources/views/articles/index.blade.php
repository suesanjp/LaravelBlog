<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="grid grid-cols-autofit gap-14">
        @foreach ($articles as $article)
            <article class="bg-base-100 card w-72 shadow-xl mx-auto">
                <div class="card-body relative">
                    <h2 class=" card-title mb-2">{{ Str::limit($article->title, 18) }}</h2>
                    <p class="h-36 break-words">{!! nl2br(e(Str::limit($article->body, 120))) !!}</p>
                    <div class="text-secondary text-sm">{{ $article->created_at->format('Y/m/d H:i') }}</div>
                    <div class="text-secondary text-sm mb-2">{{ Str::limit($article->user->name, 22) }}</div>
                    <div class="card-actions justify-end">
                        <a class="btn btn-ghost border-primary" href="{{ route('articles.show', $article) }}">続きを読む</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-app-layout>
