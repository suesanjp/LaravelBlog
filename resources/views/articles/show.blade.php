<x-article-layout>
    <articlele>
        <h1>{{ $article->title }}</h1>
        <div>{{ $article->created_at }}</div>
        <div>{!! nl2br(e($article->body)) !!}</div>
    </articlele>
    @auth
        <div>
            <a href="{{ route('articles.edit', $article) }}">編集</a>
            <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">削除</button>
            </form>
        </div>
    @endauth
</x-article-layout>
