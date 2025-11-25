<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Task
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md p-8">

                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                    Update Your Task
                </h2>

                <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Title</label>
                        <input 
                            type="text" 
                            name="title" 
                            value="{{ old('title', $task->title) }}" 
                            class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required
                        >
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Description</label>
                        <textarea 
                            name="description" 
                            rows="5"
                            class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        >{{ old('description', $task->description) }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Status</label>
                        <select 
                            name="status" 
                            class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="pending"     {{ $task->status=='pending' ? 'selected' : '' }}>Pending</option>
                            <option value="in_progress" {{ $task->status=='in_progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="completed"   {{ $task->status=='completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between mt-6">
                        <a 
                            href="{{ route('tasks.index') }}" 
                            class="px-4 py-2 text-gray-600 border rounded-lg hover:bg-gray-100"
                        >
                            Cancel
                        </a>

                        <button 
                            type="submit" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                        >
                            Update Task
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
