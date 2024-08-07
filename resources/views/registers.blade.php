@php use Illuminate\Support\Facades\Auth; @endphp
<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full pb-1.5 inline-flex">
                        @if(Auth::user()->is_admin === 1)
                        <span class="px-2">
                            <x-link-btn :href="route('company.index')">{{ __('Empresas') }}</x-link-btn>
                        </span>
                        <span class="px-2">
                            <x-link-btn :href="route('plans.index')">{{ __('Planos') }}</x-link-btn>
                        </span>
                        @endif
                        <span class="px-2">
                            <x-link-btn :href="route('folderarchives.index')">{{ __('Departamentos/Pastas') }}</x-link-btn>
                        </span>
                        <span class="px-2">
                            <x-link-btn :href="route('users')">{{ __('Usuários') }}</x-link-btn>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
