<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <h1>All contacts</h1>
    <a href="{{ route('contacts.create') }}">Create post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->name }}</h2>
                <p>Content: {{ $post->email }}</p>
                <p>Question: {{ $post->question }}</p>

            </li>
        @endforeach
    </ul>
</x-app-layout>