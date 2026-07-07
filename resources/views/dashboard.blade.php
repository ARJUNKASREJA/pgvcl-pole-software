<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                PGVCL Pole Survey & Drawing Software
            </h2>

            <span class="px-4 py-2 bg-green-600 text-white rounded-lg">
                Welcome {{ Auth::user()->name }}
            </span>
        </div>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-blue-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold">Projects</h3>
                    <p class="text-4xl mt-4 font-bold">0</p>
                </div>

                <div class="bg-green-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold">Villages</h3>
                    <p class="text-4xl mt-4 font-bold">0</p>
                </div>

                <div class="bg-orange-500 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold">Feeders</h3>
                    <p class="text-4xl mt-4 font-bold">0</p>
                </div>

                <div class="bg-red-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold">Total Poles</h3>
                    <p class="text-4xl mt-4 font-bold">0</p>
                </div>

            </div>

            <div class="bg-white shadow rounded-xl mt-8 p-8">

                <h2 class="text-2xl font-bold mb-4">
                    Welcome to PGVCL Pole Survey & Drawing Software
                </h2>

                <p class="text-gray-700 leading-8">
                    This software is developed for PGVCL Electric Pole Survey,
                    Pole Numbering, Pole Mapping, Drawing, SVG Export,
                    PDF Print and Project Management.
                </p>

            </div>

        </div>

    </div>

</x-app-layout>