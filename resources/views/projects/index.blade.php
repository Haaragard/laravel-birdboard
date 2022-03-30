<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col">

                    <div class="flex items-center justify-between mb-3">
                        <h2 class="text-sm text-gray-500">My Projects</h2>
                        <a href="/projects/create" class="text-gray-500">New project</a>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        @forelse ($projects as $project)
                            <div class="w-full rounded border shadow p-5">
                                <h3 class="text-xl font-semibold py-4">{{ $project->title }}</h3>
                                <div class="text-gray-400 font-light">{{ Str::limit($project->description, 300) }}</div>
                            </div>
                        @empty
                            <p class="bold text-xl">No projects yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
