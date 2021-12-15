<x-home-layout>
    <div class="py-1">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-6 gap-4 bg-white rounded-lg overflow-hidden p-6">
                <div class="col-span-1">
                    <h3 class="text-gray-900 font-bold">Modul</h3>
                    <ul class="py-2">
                        @forelse ($course->detailCourse as $item)
                            <li class="block text-gray-500 hover:text-gray-700 text-base">
                                {{ $item->modul }}
                            </li>
                        @empty
                            <p>No modul found</p>
                        @endforelse
                    </ul>
                </div>
                <header class="col-span-4">
                    <div>
                        <h1 class="inline-block text-3xl font-extrabold text-gray-900">{{ $course->judul }}</h1>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">
                        {{ $course->deskripsi }}
                    </p>
                    
                    <x-video>
                        {{ __('https://www.youtube.com/embed/OEV8gMkCHXQ') }}
                    </x-video>
                </header>
                <div class="col-span-1">
                    <p class="text-gray-900 font-bold">On this page</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-home-layout>