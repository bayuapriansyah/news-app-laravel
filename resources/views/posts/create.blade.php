<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Berita
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4">
                        <strong>Ada kesalahan!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Judul:</label>
                        <input type="text" name="title" class="w-full border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block">Penulis:</label>
                        <input type="text" name="author" class="w-full border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block">Isi Berita:</label>
                        <textarea name="content" rows="5" class="w-full border rounded" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block">Gambar (opsional):</label>
                        <input type="file" name="image">
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded"
                        style="background-color : blue;">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>