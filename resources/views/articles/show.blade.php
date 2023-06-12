<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <articlele>
            <h1 class="text-xl mb-4">{{ $article->title }}</h1>
            <div class="text-sm text-secondary mb-4">{{ $article->created_at }}</div>
            <div class="divider"></div>
            <div class="leading-6">{!! nl2br(e($article->body)) !!}</div>
        </articlele>
        @can('update', $article)
            <div class="flex justify-start mt-6">
                <a class="btn btn-accent mr-2" href="{{ route('articles.edit', $article) }}">編集</a>
                <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}"
                    method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-warning border-2" type="submit">削除</button>
                </form>
            </div>
        @endcan
    </div>
</x-app-layout>
