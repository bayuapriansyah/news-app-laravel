<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Berita
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Judul</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700">Author</label>
                        <input type="text" name="author" id="author" value="{{ old('author', $post->author->name) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700">Konten</label>
                        <textarea name="content" id="content"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            rows="5" required>{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Gambar</label>
                        <input type="file" name="image" id="image"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-2 max-w-xs">
                        @endif
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Perbarui
                        Berita</button>
                </form>
            </div>
        </div>
</x-app-layout>