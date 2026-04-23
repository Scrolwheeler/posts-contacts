<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <h1>Create post</h1>

    <form action="{{route ('posts.index')}}" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <label for="status">Status: </label>
        <input type="text" name="status" id="status"><br>
        <input type="submit" value="Create">

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
