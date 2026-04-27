<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Readify - Book Enthusiast Website')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 min-h-screen flex flex-col">
    @include('components.navbar')

    <main class="flex-1 max-w-6xl mx-auto w-full px-6">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
