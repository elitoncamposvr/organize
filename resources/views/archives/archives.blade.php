<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(count($folders) > 0)
                        @foreach($folders as $folder)
                            <a href="{{ route('archives.list', [$folder->id]) }}">
                                <div class="inline-flex">
                                    <div class="card">
                                        <p class="font-semibold">{{ $folder->folder_name }}</p>
                                        <p class="mt-1.5 text-sm">{{ $folder->description }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <div class="w-full text-center py-3">
                            Nenhum resultado encontrado.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

