<x-post-layout>
  <ul>
    @foreach ($posts as $post)
      <li>{{ $post->title }}</li>
    @endforeach
  </ul>
</x-post-layout>