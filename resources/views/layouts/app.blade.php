<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire Try</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @filamentStyles

    @vite(['resources/css/app.css'])
</head>

<body>
    <section class="flex h-screen items-center justify-center bg-zinc-700">
        <main class="w-full max-w-[1300px] rounded-lg border-8 border-zinc-900 bg-white p-4 shadow-lg">
        {{ $slot }}
        </main>
    </section>
    @filamentScripts
    @vite(['resources/js/app.js'])
</body>

</html>
