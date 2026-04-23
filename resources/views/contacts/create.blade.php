<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <h1>Createeeee contact</h1>

    <form action="{{route ('contacts.store')}}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
        <br>
        <br>
        <label for="text">question: </label>
        <textarea type="text" name="question" id="content"></textarea>
        <br>
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
