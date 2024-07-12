<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="pb-5">
                        Olá <span class="font-semibold italic">{{ Auth::user()->name }}</span>, seja bem vindo!
                    </div>
                    <div>
                        <div class="font-semibold pb-2">
                            Organize: Sua Solução Completa para Gestão de Documentos
                        </div>
                        Em um mundo onde a eficiência e a segurança da informação são essenciais, o Organize se destaca como uma ferramenta indispensável para empresas, negócios e indivíduos que precisam armazenar e organizar documentos confidenciais.
                    </div>
                    <div class="py-1">
                        O Organize não é apenas uma ferramenta de armazenamento, mas uma solução completa para a gestão de documentos, oferecendo a segurança, acessibilidade e eficiência que você precisa para se concentrar no que realmente importa: o sucesso do seu negócio ou a organização dos seus arquivos pessoais.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
