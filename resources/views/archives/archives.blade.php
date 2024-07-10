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
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                        </svg>
                                        <p class="text-center font-semibold">{{ $folder->folder_name }}</p>
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

