<nav class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-16 items-center">

            <div class="text-xl font-bold text-blue-700">
                PGVCL Pole Software
            </div>

            <div class="flex items-center gap-4">

                <span class="text-gray-700">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                        Logout
                    </button>

                </form>

            </div>

        </div>
    </div>
</nav>