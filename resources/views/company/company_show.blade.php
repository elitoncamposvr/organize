<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col">
                    <div class="line-show">
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Nome:</span>
                            {{ $company->company_name }}
                        </div>
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semilbold">CPF/CNPJ:</span>
                            {{ $company->cpf_cnpj }}
                        </div>
                    </div>
                    <div class="line-show">
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Nome do Responsável:</span>
                            {{ $company->responsible_name }}
                        </div>
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">E-mail</span>
                            {{ $company->email }}
                        </div>
                    </div>
                    <div class="line-show">
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Telefone:</span>
                            {{ $company->phone }}
                        </div>
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Celular:</span>
                            {{ $company->cellphone }}
                        </div>
                    </div>
                    <div class="line-show">
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Plano Atual:</span>
                            {{ $company->plan_id }}
                        </div>
                        <div class="w-3/6 flex">
                            <span class="pr-2 font-semibold">Data de Expiração:</span>
                            {{ $company->access_expiration }}
                        </div>
                    </div>
                    <div class="w-full py-3 flex justify-center">
                        <x-link-btn :href="route('company.create')">{{ __('Alterar Plano') }}</x-link-btn>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
