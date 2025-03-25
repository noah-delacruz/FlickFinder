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
            </div>

            {{-- <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a job</a>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log Out</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
            @endguest --}}
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{-- {{ $slot }} --}}
            hi
        </main>
    </div>
</body>
</html>