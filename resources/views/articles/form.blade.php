@csrf 
<dl class="text-center">
    <dt>タイトル</dt>
    <dd><input class="textarea-primary" type="text" name="title" value="{{ old('title', $article->title) }}"></dd>
    <dt>本文</dt>
    <dd><textarea class="textarea-primary" name="body" rows="5">{{ old('body', $article->body) }}</textarea></dd>
</dl>
