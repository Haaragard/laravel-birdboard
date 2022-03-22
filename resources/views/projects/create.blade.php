<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Create a project</h1>

                    <form class="container" method="POST" action="/projects">
                        @csrf
                        <div class="field">
                            <label class="label" for="title">Title</label>

                            <div class="control">
                                <input type="text" class="input" name="title" placeholder="Title" />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="description">Description</label>

                            <div class="control">
                                <textarea class="textarea" name="description"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-link">Create Project</button>
                                <a href="/projects" class="underline">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
