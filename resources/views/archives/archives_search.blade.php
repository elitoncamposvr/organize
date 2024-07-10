<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full pb-1.5 inline-flex justify-end">
                        <x-link-btn :href="route('archives.list', [$folder_id])">{{ __('Voltar a pasta') }}</x-link-btn>
                    </div>

                    <div class="w-full flex my-2.5 p-2 bg-gray-700 rounded-md">
                        <form action="{{ route('archives.search', [$folder_id]) }}" method="get" class="w-full flex">
                            <input type="search" name="search" id="search" class="w-7/12 rounded-md mr-2">
                            <select name="filter_type" id="filter_type" class="w-3/12 mr-2">
                                <option value="1">Nome do Arquivo</option>
                                <option value="2">Descrição do Arquivo</option>
                            </select>
                            <x-primary-button>{{ __('Buscar Arquivo') }}</x-primary-button>
                        </form>
                    </div>

                    @if(count($archives_results) > 0)
                        <div class="w-full inline-flex border-b py-1.5">
                            <div class="w-3/12 font-semibold">
                                Nome do Arquivo
                            </div>
                            <div class="w-6/12 font-semibold">
                                Descrição
                            </div>
                            <div class="w-2/12 font-semibold">
                                Usuário
                            </div>
                            <div class="w-1/12 font-semibold text-center">
                                Ações
                            </div>
                        </div>
                        @foreach($archives_results as $archive)
                            <div class="w-full inline-flex border-b my-4 dark:border-b-gray-700">
                                <div class="w-3/12">
                                    {{ $archive->file_slug }}
                                </div>
                                <div class="w-6/12">
                                    {{ $archive->description }}
                                </div>
                                <div class="w-2/12">
                                    {{ $archive->name }}
                                </div>
                                <div class="w-1/12 flex items-center justify-evenly">
                                    <a href="{{ asset('storage/images/'.$archive->company_id.'/'.$archive->filename) }}" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
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

