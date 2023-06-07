<x-post-layout>
  <x-slot name="title">
    記事一覧
  </x-slot>
  <ul>
    @foreach ($posts as $post)
      <li>{{ $post->title }}</li>
    @endforeach
  </ul>
</body>
</html>
</x-post-layout>