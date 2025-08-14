<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Selamat Datang") }}
                </div>
                <div class="container flex items-center justify-end p-2">
                    <button class="bg-blue-800 text-white rounded-lg p-2 "><a href="{{ route('posts.index') }}">Daftar
                            Berita
                            &rsaquo;</a></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>