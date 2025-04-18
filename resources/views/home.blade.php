@extends('layouts.app')

@section('content')
<!-- Hero Section111 -->
<section class="relative h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
             alt="Grand Hotel Lobby"
             class="w-full h-full object-cover transform scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/50"></div>
    </div>

    <div class="relative z-10 text-center max-w-4xl px-4">
        <div class="flex items-center justify-center mb-6 space-x-3">
            <i class="fas fa-hotel text-4xl text-blue-200"></i>
            <h1 class="font-playfair text-5xl md:text-6xl font-bold text-white">
                <span class="text-blue-200">LUXURY</span> GRAND
            </h1>
        </div>
        <p class="text-xl text-blue-50 mb-8 max-w-3xl mx-auto leading-relaxed">
            在市中心体验世界级的奢华住宿，享受我们屡获殊荣的水疗中心、米其林星级餐厅和无与伦比的个性化服务
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            @auth
                <a href="#" class="bg-white text-blue-900 px-8 py-4 rounded-full text-lg font-semibold
                    hover:bg-opacity-90 transition-all transform hover:scale-105 shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i>立即预订
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full text-lg
                    hover:bg-white hover:text-blue-900 transition-colors">
                    <i class="fas fa-concierge-bell mr-2"></i>礼宾服务
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-white text-blue-900 px-8 py-4 rounded-full text-lg
                    font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>会员登录
                </a>
                <a href="{{ route('register') }}" class="border-2 border-white text-white px-8 py-4 rounded-full
                    text-lg hover:bg-white hover:text-blue-900 transition-colors">
                    <i class="fas fa-user-plus mr-2"></i>加入会员
                </a>
            @endauth
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-20 bg-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-playfair font-bold text-center mb-16 text-blue-900">
            尊贵体验亮点
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- 特色项目1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-blue-600 text-5xl mb-6">
                    <i class="fas fa-spa"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">豪华水疗中心</h3>
                <p class="text-gray-600">2000平方米的顶级水疗设施，提供传统泰式按摩和现代理疗服务</p>
            </div>

            <!-- 特色项目2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-blue-600 text-5xl mb-6">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">美食盛宴</h3>
                <p class="text-gray-600">三家米其林星级餐厅，提供全球美食与顶级酒窖珍藏</p>
            </div>

            <!-- 特色项目3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-blue-600 text-5xl mb-6">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">天际泳池</h3>
                <p class="text-gray-600">150米高空无边际泳池，尽享城市全景与日落美景</p>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Showcase -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-playfair font-bold text-center mb-16 text-blue-900">
            精选房型
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 房型1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                     alt="Deluxe Room"
                     class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">豪华客房</h3>
                    <div class="flex items-center justify-between">
                        <p class="text-blue-200">每晚 ¥2,888 起</p>
                        <a href="#" class="flex items-center hover:text-blue-300">
                            立即预订 <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                     alt="Deluxe Room"
                     class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">超级客房</h3>
                    <div class="flex items-center justify-between">
                        <p class="text-blue-200">每晚 ¥6,888 起</p>
                        <a href="#" class="flex items-center hover:text-blue-300">
                            立即预订 <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                     alt="Deluxe Room"
                     class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">顶级客房</h3>
                    <div class="flex items-center justify-between">
                        <p class="text-blue-200">每晚 ¥8,888 起</p>
                        <a href="#" class="flex items-center hover:text-blue-300">
                            立即预订 <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 更多房型... -->
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-900 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-playfair font-bold mb-6">限时尊享礼遇</h2>
        <p class="text-xl mb-8 opacity-90">预订三晚即享免费房型升级 + 双人下午茶套餐</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-white text-blue-900 px-8 py-3 rounded-full font-semibold
                hover:bg-gray-100 transition-colors shadow-lg">
                <i class="fas fa-gift mr-2"></i>查看优惠详情
            </a>
            <a href="tel:400-888-8888" class="border-2 border-white px-8 py-3 rounded-full
                hover:bg-white hover:text-blue-900 transition-colors">
                <i class="fas fa-phone mr-2"></i>致电预订
            </a>
        </div>
    </div>
</section>
@endsection