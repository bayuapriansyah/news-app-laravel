<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Daftar Berita
        </h2>
    </x-slot>

    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="pb-4 pt-9 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <form action="">
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="search"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search blog" type="search" id="search" name="search"
                                value="{{ request('search') }}">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="flex justify-between items-center mb-4">
                    <div class="totalPost font-bold text-xl">Total Berita : {{ $posts->total() }}</div>
                    <a href="{{ route('posts.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block"
                        style="background-color: blue;">+ Tambah Berita</a>
                </div>

                <div class="wrap-post grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-4">
                    @forelse($posts as $post)
                        <div class="card bg-white dark:bg-gray-800 shadow-lg rounded-xl p-6 transition hover:shadow-xl">
                            <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mb-2">
                                <span class="font-medium">{{ $post->category->name }}</span>
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white leading-snug mb-4">
                                {{ $post->title }}
                            </h1>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                {{ Str::limit($post->content, 200) }}
                            </p>
                            <div class="flex justify-between items-center text-sm text-gray-500 dark:text-gray-400">
                                <span>oleh <a href="{{ route('posts.author', $post->author_id) }}"
                                        class="hover:underline"><strong
                                            class="text-gray-800 dark:text-white">{{ $post->author->name }}</strong></a></span>
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class="text-blue-600 hover:underline hover:text-blue-800 transition">
                                    Read more →
                                </a>
                            </div>
                        </div>
                    @empty
                        <li>Tidak ada berita</li>
                    @endforelse
                </div>
                <div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>