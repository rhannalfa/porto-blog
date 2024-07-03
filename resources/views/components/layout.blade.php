<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="../image/avatar.png">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Halaman {{$title}}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

    <div class="min-h-full">
        
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        
        <x-footer></x-footer>
    </div>

</body>
</html>