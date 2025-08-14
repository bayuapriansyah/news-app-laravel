<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <main class="pt-8 pb-8 lg:pt-8 lg:pb-8 bg-white dark:bg-gray-900 antialiased">
                    <div class="flex justify-between px-4 mx-auto w-full">
                        <article <header class="mb-4 lg:mb-6 not-format">
                            <address class="flex items-center mb-6 not-italic">
                                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                    <img class="mr-4 w-16 h-16 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Jese Leos">
                                    <div>
                                        <div class="text-xl font-bold text-gray-900 dark:text-white">
                                            {{ $post->author->name }}</div>
                                        <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                                datetime="2022-02-08"
                                                title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time>
                                        </p>
                                    </div>
                                </div>
                            </address>
                            <h1
                                class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                {{ $post->title }}
                            </h1>
                            </header>
                            <p class="lead w-full mb-4">{{ $post->content }}</p>
                            <figure><img
                                    src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png"
                                    alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="mt-8 px-4 flex flex-col gap-2 w-full">
                        <span>Dibuat pada: <strong>{{ $post->created_at->format('d M Y H:i') }}</strong></span>
                        <div class="wrappers flex justify-between items-center">
                            <span>Diperbarui pada: <strong>{{ $post->updated_at->format('d M Y H:i') }}</strong></span>
                            <div class="action flex gap-2">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="text-blue-500 font-semibold hover:underline">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-500 font-semibold hover:underline">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
</x-app-layout>