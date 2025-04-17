<!DOCTYPE html>
<html>
<head>
    <title>Grand Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-blue-800 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="text-white text-2xl font-bold">Grand Hotel</a>
            <div class="space-x-4">
                @auth
                    <span class="text-white">Welcome, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white hover:text-gray-200">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                    <a href="{{ route('register') }}" class="text-white">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>
</html>