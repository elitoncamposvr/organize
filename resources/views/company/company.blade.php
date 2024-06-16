<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full pb-1.5 inline-flex justify-end">
                        <x-link-btn :href="route('company.create')">{{ __('Novo Cliente') }}</x-link-btn>
                    </div>

                    <div class="w-full inline-flex border-b py-1.5">
                        <div class="w-3/12">
                            Nome Cliente
                        </div>
                        <div class="w-3/12">
                            Responsável
                        </div>
                        <div class="w-2/12">
                            Celular
                        </div>
                        <div class="w-2/12">
                            E-mail
                        </div>
                        <div class="w-1/12">
                            Expiração
                        </div>
                        <div class="w-1/12 text-center">
                            Ações
                        </div>
                    </div>
                    @foreach($companies as $company)
                        <div class="w-full inline-flex border-b my-4 dark:border-b-gray-700">
                            <div class="w-3/12">
                                {{ $company->company_name }}
                            </div>
                            <div class="w-3/12">
                                {{ $company->responsible_name }}
                            </div>
                            <div class="w-2/12">
                               {{ $company->cellphone }}
                            </div>
                            <div class="w-2/12">
                                {{ $company->email }}
                            </div>
                            <div class="w-1/12">
                                {{ $company->date_expiration }}
                            </div>
                            <div class="w-1/12 flex items-center justify-evenly">
                                <a href="{{ route('company.show', [$company->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('company.edit', [$company->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



