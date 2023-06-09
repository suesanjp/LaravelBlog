<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <articlele>
            <h1 class="text-xl break-words mb-4">{{ $article->title }}</h1>
            <div class="text-sm text-secondary mb-2">{{ $article->created_at }}</div>
            <div class="text-sm text-secondary">{{ $article->user->name, 22 }}</div>
            <div class="divider"></div>
            <div class="leading-6 break-words">{!! nl2br(e($article->body)) !!}</div>
        </articlele>
        @can('update', $article)
            <div class="flex justify-start mt-6">
                <a class="btn btn-primary mr-2" href="{{ route('articles.edit', $article) }}">編集</a>
                <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}"
                    method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-error border-2" type="submit">削除</button>
                </form>
            </div>
        @endcan
    </div>
</x-app-layout>
