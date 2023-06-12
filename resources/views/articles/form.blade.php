@csrf 
<div class="flex flex-col items-center">
<input class="input input-secondary w-full mb-4" placeholder="ここにタイトルを入力" type="text" name="title" value="{{ old('title', $article->title) }}">
<textarea class="input input-secondary w-full  h-64 resize-none mb-4" placeholder="ここに文章を入力" name="body" rows="5">{{ old('body', $article->body) }}</textarea>
</div>
</dl>
