<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <h1>Edit post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <label for="status">Status: </label>
        <input type="text" name="status" id="status" value="{{ $post->status }}"><br>
        <input type="submit" value="Update">
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</x-app-layout>
