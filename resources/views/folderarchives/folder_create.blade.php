<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('folderarchives.store') }}" method="post" class="w-full">
                        @csrf
                        <div class="w-full">
                            <label for="folder_name">Nome da pasta</label>
                            <input type="text" name="folder_name" id="folder_name" class="w-full" required autofocus>
                        </div>

                        <div class="w-full mt-3">
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" class="w-full"></textarea>
                        </div>

                        <div class="w-full flex justify-center mt-3">
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

