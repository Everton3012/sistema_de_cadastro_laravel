<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="m-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                    <p class="mb-4 mt-3">
                        Exibindo detalhes do cliente {{$cliente->nome}}
                    </p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <p><strong>Nome: {{$cliente->nome}}</strong></p>
                    <p><strong>E-mail: {{$cliente->email}}</strong>   |   <strong> Tel:  {{$cliente->telefone}}</strong></p>
                    <p><strong>Empresa: {{$cliente->empresa}}</strong></p>
                    <p><strong>Telefone Comercial: {{$cliente->tel_comercial}}</strong></p>
                    <button class="bg-blue-500 text-white rounded py-2 px-4" type="button">
                        <a href="{{route('meus.clientes',Auth::user()->id)}}">
                            <i class="fa-solid fa-right-from-bracket"></i></button>
                        </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
