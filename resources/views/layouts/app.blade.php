<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script>
    setTimeout(() => {
        const el = document.querySelector('.flash-success');
        if (el) el.style.display = 'none';
    }, 4000);
</script>

<body>
    <main>
        {{ $slot }}
    </main>
    @if(session('success'))
    <div class="flash-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>