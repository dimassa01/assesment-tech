<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-indigo-100 py-10 px-6">

    <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create a New Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <label class="block text-gray-700 font-medium">Title</label>
            <input type="text" name="title" class="w-full mt-1 mb-4 rounded-lg border-gray-300 shadow-sm" required>

            <label class="block text-gray-700 font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full mt-1 mb-4 rounded-lg border-gray-300 shadow-sm"></textarea>

            <button class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-3 rounded-xl">
                Save Task
            </button>
        </form>
    </div>

</div>
</x-app-layout>
