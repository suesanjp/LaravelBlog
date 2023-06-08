<x-article-layout>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="btn btn-primary">マイページ</a>
                <p><a href="{{ route('articles.create') }}">記事を書く</a></p>
            @else
                <a href="{{ route('login') }}"
                    class="btn btn-primary">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="btn btn-primary">登録</a>
                @endif
            @endauth
        </div>
    @endif

    @foreach ($articles as $article)
        <article class="article-item">
            <div class="article-title">
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            </div>
            <div class="article-info">{{ $article->created_at }}</div>
        </article>
        <div class="article-control">
            <a class=" href="{{ route('articles.edit', $article) }}">編集</a>
            <form  onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}"
                method="post">
                @csrf
                @method('delete')
                <button type="submit">削除</button>
            </form>
        </div>
    @endforeach
</x-article-layout>
