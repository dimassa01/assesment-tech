<x-guest-layout>
    <div class="min-h-screen w-full flex items-center justify-center 
        bg-gradient-to-br from-blue-100 via-purple-100 to-indigo-100 relative overflow-hidden">

        <!-- Left Illustration -->
        <div class="hidden lg:block absolute left-10 top-1/2 -translate-y-1/2">
            <img src="https://undraw.co/api/illustrations/f4f1cbda-d541-49a1-8028-0a884cfb94a5"
                 class="w-72 opacity-90" alt="register-illustration-left">
        </div>

        <!-- Right Illustration -->
        <div class="hidden lg:block absolute right-10 top-1/2 -translate-y-1/2">
            <img src="https://undraw.co/api/illustrations/ddb24b88-2093-4a41-b3c2-75013b334c06"
                 class="w-72 opacity-90" alt="register-illustration-right">
        </div>

        <!-- Register Card -->
        <div class="max-w-md w-full bg-white shadow-xl rounded-2xl p-8 backdrop-blur-lg z-10">

            <!-- Icon -->
            <div class="flex justify-center">
                <div class="bg-indigo-500 p-4 rounded-full shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 11c0-1.657-1.343-3-3-3S6 9.343 6 11s1.343 3 3 3s3-1.343 3-3zM4 19c0-2.761 2.686-5 6-5s6 2.239 6 5v1H4v-1zm14-7v-2h2v-2h-2V6h-2v2h-2v2h2v2z" />
                    </svg>
                </div>
            </div>

            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-800">
                Create Your Account
            </h2>

            <p class="mt-2 text-center text-gray-500">
                Join us and manage your To-Do List easily
            </p>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input id="name" name="name" type="text" required autofocus
                        class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-500
                               focus:ring-indigo-500 shadow-sm" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required
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

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-500
                               focus:ring-indigo-500 shadow-sm" />
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg 
                           shadow-lg transition">
                    Create Account
                </button>
            </form>

            <!-- Already have account -->
            <p class="mt-6 text-center text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-semibold">
                    Login here
                </a>
            </p>

        </div>
    </div>
</x-guest-layout>
