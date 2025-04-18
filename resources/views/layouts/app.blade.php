<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Grand Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- 添加字体库 -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 35, 71, 0.8), rgba(0, 35, 71, 0.8)),
                        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
        }
        .room-hover:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="font-poppins">
    <nav class="bg-gray-900 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center">
                    <span class="text-white text-2xl font-playfair font-bold">LUXURY GRAND</span>
                    <span class="text-blue-400 text-2xl ml-1">HOTEL</span>
                </a>
                <div class="hidden md:flex space-x-8">
                    @auth
                    <span class="text-white">欢迎, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white hover:text-gray-200">登出</button>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <p>© 2025 Luxury Grand Hotel. All rights reserved.</p>
                <div class="mt-4 space-x-6">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>