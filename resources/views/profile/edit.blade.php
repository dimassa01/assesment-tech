<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 py-10 px-4">

        <!-- TITLE -->
        <div class="max-w-4xl mx-auto text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-800 drop-shadow">
                Your Profile ⚙️
            </h1>
            <p class="text-gray-600 mt-2">Manage your account information</p>
        </div>

        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-6">

            <!-- LEFT SIDE — UPDATE INFO -->
            <div class="bg-white bg-opacity-90 backdrop-blur-lg p-8 rounded-2xl shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Personal Information</h2>

                @if (session('status') === 'profile-updated')
                    <div class="p-3 mb-4 text-green-700 bg-green-100 rounded-lg">
                        Profile updated successfully!
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label class="block font-semibold text-gray-700 mb-1">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            value="{{ old('name', $user->name) }}"
                            class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold text-gray-700 mb-1">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            value="{{ old('email', $user->email) }}"
                            class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required
                        >
                    </div>

                    <button class="mt-3 bg-indigo-600 text-white px-5 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                        Save Changes
                    </button>
                </form>
            </div>

            <!-- RIGHT SIDE — UPDATE PASSWORD -->
            <div class="bg-white bg-opacity-90 backdrop-blur-lg p-8 rounded-2xl shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Update Password</h2>

                @if (session('status') === 'password-updated')
                    <div class="p-3 mb-4 text-green-700 bg-green-100 rounded-lg">
                        Password updated successfully!
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-semibold text-gray-700 mb-1">Current Password</label>
                        <input 
                            type="password" 
                            name="current_password"
                            class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold text-gray-700 mb-1">New Password</label>
                        <input 
                            type="password" 
                            name="password"
                            class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <label class="block font-semibold text-gray-700 mb-1">Confirm Password</label>
                        <input 
                            type="password" 
                            name="password_confirmation"
                            class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                            required
                        >
                    </div>

                    <button class="mt-3 bg-green-600 text-white px-5 py-2 rounded-lg shadow hover:bg-green-700 transition">
                        Update Password
                    </button>
                </form>
            </div>

        </div>

        <!-- DELETE ACCOUNT -->
        <div class="max-w-4xl mx-auto mt-10 bg-white bg-opacity-90 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800">Danger Zone</h2>
            <p class="text-gray-600 mt-2">Once deleted, your account cannot be recovered.</p>

            <form method="POST" action="{{ route('profile.destroy') }}" class="mt-5">
                @csrf
                @method('DELETE')

                <button class="bg-red-600 text-white px-6 py-2 rounded-lg shadow hover:bg-red-700 transition">
                    Delete Account
                </button>
            </form>
        </div>

    </div>
</x-app-layout>
