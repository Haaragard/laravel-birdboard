<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $project->title }}</h1>

                    <div>{{ $project->description }}</div>

                    <a href="/projects" class="underline">Go back</a>

                    <div class="flex flex-col">
                        @foreach ($project->tasks as $task)
                            {{ $task->body }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
