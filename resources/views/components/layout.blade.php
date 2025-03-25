<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flick Finder</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#060606] pb-20 text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/" class="hover:text-gray-400 transition-colors duration-300">
                    Home
                </a>

                <a href="/favorites" class="pl-6 hover:text-gray-400 transition-colors duration-300">
                    Favorites
                </a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>