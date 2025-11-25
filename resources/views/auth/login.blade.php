<x-guest-layout>
    <div class="min-h-screen w-full flex items-center justify-center 
        bg-gradient-to-br from-blue-100 via-purple-100 to-indigo-100 relative overflow-hidden">

        <!-- Left Illustration -->
        <div class="hidden lg:block absolute left-10 top-1/2 -translate-y-1/2">
            <img src="https://undraw.org/illustrations/b4e098d88ea74f2fb9e60f5b81067579" 
                class="w-72 opacity-90" alt="todo-illustration-left">
        </div>

        <!-- Right Illustration -->
        <div class="hidden lg:block absolute right-10 top-1/2 -translate-y-1/2">
            <img src="https://undraw.org/illustrations/6e24f1525c2f49d6baf716ba38d4e916"
                class="w-72 opacity-90" alt="todo-illustration-right">
        </div>
        
        <!-- Login Card -->
        <div class="max-w-md w-full bg-white shadow-xl rounded-2xl p-8 backdrop-blur-lg z-10">

            <!-- Icon -->
            <div class="flex justify-center">
                <div class="bg-indigo-500 p-4 rounded-full shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                              d="M9 12l2 2l4 -4M7 7h10M7 12h2m4 0h2m-8 5h10" />
                    </svg>
                </div>
            </div>

            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-800">
                Welcome Back
            </h2>

            <p class="mt-2 text-center text-gray-500">
                Login to manage your To-Do List
            </p>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required autofocus 
                        class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-500
                               focus:ring-indigo-500 shadow-sm" />
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required 
                        class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-500
                               focus:ring-indigo-500 shadow-sm" />
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" 
                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg
                           shadow-lg transition">
                    Login
                </button>
            </form>

            <!-- Register -->
            <p class="mt-6 text-center text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-semibold">
                    Create Account
                </a>
            </p>

        </div>
    </div>
</x-guest-layout>
