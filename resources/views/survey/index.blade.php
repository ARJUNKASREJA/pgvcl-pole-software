<x-app-layout>

<div class="max-w-7xl mx-auto p-6">

    <div class="flex justify-between mb-5">

        <h1 class="text-2xl font-bold">
            Projects
        </h1>

        <a href="{{ route('projects.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            New Project
        </a>

    </div>

    <div class="bg-white shadow rounded">

        <table class="w-full">

            <thead>

                <tr class="border-b bg-gray-100">

                    <th class="p-3 text-left">Project</th>
                    <th class="p-3 text-left">Code</th>
                    <th class="p-3 text-left">Village</th>
                    <th class="p-3 text-center">Actions</th>

                </tr>

            </thead>

            <tbody>

                @foreach($projects as $project)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $project->project_name }}
                    </td>

                    <td class="p-3">
                        {{ $project->project_code }}
                    </td>

                    <td class="p-3">
                        {{ $project->village }}
                    </td>

                    <td class="p-3 text-center space-x-2">

                        <a href="{{ route('projects.edit',$project) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <a href="{{ route('survey.index',$project) }}"
                           class="bg-green-600 text-white px-3 py-1 rounded">
                            Survey
                        </a>

                        <form action="{{ route('projects.destroy',$project) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Delete Project?')"
                                class="bg-red-600 text-white px-3 py-1 rounded">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>