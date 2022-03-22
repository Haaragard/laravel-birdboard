<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h1 class="bold text-xl">Birdboard</h1>
                        <a href="/projects/create" class="underline">New project</a>
                    </div>

                    <ul class="mt-2">
                        @forelse ($projects as $project)
                            <li>
                                <a href="{{ $project->path() }}" class="underline">{{ $project->title }}</a>
                            </li>
                        @empty
                            <li>No projects yet.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
