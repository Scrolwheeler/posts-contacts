<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <a href="{{route ('posts.index')}}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <p>Status: {{$post->status}}</p>
</x-app-layout>
