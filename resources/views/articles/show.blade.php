<x-app-layout>
    <x-slot name="header">
        <articlele class="article-detail">
            <h1 class="article-title">{{ $article->title }}</h1>
            <div class="article-info">{{ $article->created_at }}</div>
            <div class="article-body">{!! nl2br(e($article->body)) !!}</div>
        </articlele>
        <div class="article-control">
            <a href="{{ route('articles.edit', $article) }}">編集</a>
            <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}"
                method="article">
                @csrf
                @method('delete')
                <button type="submit">削除</button>
            </form>
        </div>
</x-app-layout>
