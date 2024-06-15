<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('company.store') }}" method="post">
                        @csrf
                        <div class="w-full flex mb-3">
                            <div class="w-3/6 sm:mr-1">
                                <label for="company_name">Nome</label>
                                <input type="text" name="company_name" id="company_name" class="w-full" required autofocus>
                            </div>
                            <div class="w-3/6">
                                <label for="cpf_cnpj">CPF/CNPJ</label>
                                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="w-full" required>
                            </div>
                        </div>
                        <div class="w-full flex mb-3">
                            <div class="w-3/6 sm:mr-1">
                                <label for="responsible_name">Pessoa Responsável</label>
                                <input type="text" name="responsible_name" id="responsible_name" class="w-full" required>
                            </div>
                            <div class="w-3/6">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="w-full" required>
                            </div>
                        </div>
                        <div class="w-full flex mb-3">
                            <div class="w-3/6 sm:mr-1">
                                <label for="phone">Telefone</label>
                                <input type="tel" name="phone" id="phone" class="w-full">
                            </div>
                            <div class="w-3/6">
                                <label for="cellphone">Celular</label>
                                <input type="tel" name="cellphone" id="cellphone" class="w-full" required>
                            </div>
                        </div>
                        <div class="w-full flex justify-center">
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
