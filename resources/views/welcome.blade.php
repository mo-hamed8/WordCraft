<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Wordzcraft</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Wordzcraft</h1>
        <p class="text-gray-600 mb-8">Crafting Words, Crafting Ideas</p>
        <div class="space-x-4">
            @if (Route::has('login'))
                                        <nav class="">
                                            @auth
                                                <a
                                                    href="{{ route("words.create") }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                >
                                                    Dashboard
                                                </a>
                                            @else
                                            <a href="{{route("login")}}" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Login</a>
            
            
                                                @if (Route::has('register'))
                                                <a href="{{route("register")}}" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600">Register</a>
            
                                                @endif
                                            @endauth
                                        </nav>
                                    @endif
        </div>
    </div>
</body>
</html>




