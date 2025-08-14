<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Daftar Berita dari {{ $posts->first()->author->name ?? 'Tidak Diketahui' }} | {{ $posts->count() }} Berita
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif

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
                                <span>
                                    oleh
                                    <a href="{{ route('posts.author', $post->author_id) }}" class="hover:underline">
                                        <strong class="text-gray-800 dark:text-white">{{ $post->author->name }}</strong>
                                    </a>
                                </span>
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class="text-blue-600 hover:underline hover:text-blue-800 transition">
                                    Read more →
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">Tidak ada berita.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>