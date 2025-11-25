<x-app-layout>

<div class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-indigo-100 py-10 px-6">

    <div class="max-w-5xl mx-auto">
        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Your Tasks</h1>
            <a href="{{ route('tasks.create') }}" 
                class="bg-indigo-500 hover:bg-indigo-600 text-white px-5 py-2 rounded-xl shadow">
                + Add Task
            </a>
        </div>

        <div class="grid gap-6">

            @foreach($tasks as $task)
            <div class="bg-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">{{ $task->title }}</h2>
                        <p class="text-gray-600 mt-1">{{ $task->description }}</p>
                    </div>

                    <span class="px-3 py-1 rounded-full text-white text-sm
                        {{ $task->status=='completed' ? 'bg-green-500' : 'bg-yellow-500' }}">
                        {{ ucfirst($task->status) }}
                    </span>
                </div>

                <div class="mt-4 flex gap-3">
                    <a href="{{ route('tasks.edit', $task->id) }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Edit
                    </a>

                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this task?')"
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</div>

</x-app-layout>
