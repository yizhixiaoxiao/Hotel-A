@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-4xl font-bold text-blue-800 mb-6">Welcome to Grand Hotel</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <img src="https://via.placeholder.com/600x400" alt="Hotel Lobby" class="rounded-lg shadow-lg">
                    <div>
                        <p class="text-gray-600 text-lg mb-4">
                            Experience luxury accommodation with our world-class amenities and services.
                        </p>
                        <div class="mt-6">
                            @auth
                                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                                    Book Now
                                </a>
                            @else
                                <p class="text-gray-500">Please login to make a booking</p>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection