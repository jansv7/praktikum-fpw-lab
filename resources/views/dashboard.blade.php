<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600">Selamat datang, {{ auth()->user()->name }}.</p>
                <p class="text-gray-600">User ID: {{ Auth::id() }}</p>
                <div class="space-y-2">
                    <div>
                        <x-badge status="Aman" />
                    </div>

                    <div>
                        <x-badge status="Menipis" />
                    </div>

                    <div>
                        <x-badge status="Habis" />
                    </div>
                <p>
                    Status Login: {{ Auth::check() ? 'Sudah Login' : 'Belum Login' }}
                </p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-600">Logout</button>
                </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>