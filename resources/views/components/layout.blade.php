<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Portfolio' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <x-layout.header />

        <main class="flex-grow container mx-auto p-6">
            {{ $slot }}
        </main>

        <x-layout.footer />
    </div>
</body>
</html>
