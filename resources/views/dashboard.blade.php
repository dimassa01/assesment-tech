<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 py-10 px-4">

        {{-- TITLE --}}
        <div class="max-w-6xl mx-auto text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-800 drop-shadow">
                Your Productivity Dashboard ✨
            </h1>
            <p class="text-gray-600 mt-2">Manage tasks, track progress, and stay organized</p>
        </div>

        {{-- GRID (STATS + WEATHER) --}}
        <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-6">

            {{-- CARD — Total Tasks --}}
            <div class="bg-white backdrop-blur-lg bg-opacity-80 rounded-2xl shadow-lg p-6 transition hover:-translate-y-1 hover:shadow-2xl">
                <h2 class="text-lg font-semibold text-gray-700">Total Tasks</h2>
                <p class="text-5xl font-bold text-indigo-600 mt-3">{{ $taskCount }}</p>
            </div>

            {{-- CARD — Completed --}}
            <div class="bg-white backdrop-blur-lg bg-opacity-80 rounded-2xl shadow-lg p-6 transition hover:-translate-y-1 hover:shadow-2xl">
                <h2 class="text-lg font-semibold text-gray-700">Completed</h2>
                <p class="text-5xl font-bold text-green-600 mt-3">{{ $completedCount }}</p>
            </div>

            {{-- CARD — Pending --}}
            <div class="bg-white backdrop-blur-lg bg-opacity-80 rounded-2xl shadow-lg p-6 transition hover:-translate-y-1 hover:shadow-2xl">
                <h2 class="text-lg font-semibold text-gray-700">Pending</h2>
                <p class="text-5xl font-bold text-red-500 mt-3">{{ $pendingCount }}</p>
            </div>

            {{-- CARD — Weather --}}
            <div class="bg-white backdrop-blur-lg bg-opacity-80 rounded-2xl shadow-lg p-6 transition hover:-translate-y-1 hover:shadow-2xl">
                <h2 class="text-lg font-semibold text-gray-700 flex items-center gap-2">
                    🌤 Current Weather
                </h2>

                @if($weather && isset($weather['main']))
                    <p class="text-4xl font-bold text-blue-600 mt-3">
                        {{ $weather['main']['temp'] }}°C
                    </p>
                    <p class="text-gray-700 capitalize">{{ $weather['weather'][0]['description'] }}</p>
                    <p class="text-gray-500 text-sm mt-1">{{ $weather['name'] }}</p>
                @else
                    <p class="text-gray-500 mt-3 text-sm">Weather data unavailable</p>
                @endif
            </div>
        </div>

        {{-- BUTTON TO TASK LIST --}}
        <div class="max-w-6xl mx-auto text-center mt-14">
            <a href="{{ route('tasks.index') }}"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition">
                Manage Your Tasks →
            </a>
        </div>

    </div>
</x-app-layout>
