<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('plans.store') }}" method="post">
                        @csrf
                        <div class="w-full flex mb-3">
                            <div class="w-6/12 mr-1">
                                <label for="plan_name">Nome do Plano</label>
                                <input type="text" name="plan_name" id="plan_name" class="w-full" required autofocus>
                            </div>
                            <div class="w-3/12 mr-1">
                                <label for="expiration">Período</label>
                                <select name="expiration" id="expiration" class="w-full" required>
                                    <option value="1">1 mês</option>
                                    <option value="2">2 meses</option>
                                    <option value="3">3 meses</option>
                                    <option value="4">6 meses</option>
                                    <option value="5">1 ano</option>
                                </select>
                            </div>
                            <div class="w-3/12">
                                <label for="period_deficiency">Período de Carência</label>
                                <select name="period_deficiency" id="period_deficiency" class="w-full" required>
                                    <option value="1">1 dia</option>
                                    <option value="2">2 dias</option>
                                    <option value="3">3 dias</option>
                                    <option value="4">4 dias</option>
                                    <option value="5">5 dias</option>
                                    <option value="6">6 dias</option>
                                    <option value="7">7 dias</option>
                                    <option value="8">8 dias</option>
                                    <option value="9">9 dias</option>
                                    <option value="10">10 dias</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full flex mb-3">
                            <textarea name="description" id="description" class="w-full"></textarea>
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
