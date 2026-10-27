<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {{ config('app.name') }}
        </title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#FFEDD6] font-mono">
        <x-header />
            <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-130px)] px-4">
                {{ $slot }}
            </main>
        <x-footer />

        <x-toast />

        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    </body>
</html>
