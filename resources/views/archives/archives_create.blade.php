<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full" action="{{ route('archives.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="folder_archive_id" value="{{ $id }}">
                        <div class="w-full border-b border-gray-600 pb-1.5">
                            <label for="filename">Arquivo</label>
                            <input type="file" name="filename" id="filename" class="w-full" required>
                        </div>
                        <div class="w-full py-1.5">
                            <label for="file_slug">Nome do arquivo</label>
                            <input type="text" name="file_slug" id="file_slug" class="w-full" required>
                        </div>
                        <div class="w-full py-1 5">
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" class="w-full" required></textarea>
                        </div>
                        <div class="w-full flex justify-center py-1.5">
                            <x-primary-button>{{ __('Salvar arquivo') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



