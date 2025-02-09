<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire Try</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="flex h-screen items-center justify-center bg-zinc-700">
        <main class="w-1/2 max-w-[500px] rounded-lg border-8 border-zinc-900 bg-white p-4 shadow-lg">
            <livewire:create-post />
        </main>
    </section>
</body>

</html>
