<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-0 text-gray-900 dark:text-gray-100">
                    <p class="m-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                    <p class="mb-4 mt-3">
                        Exibindo detalhes do cliente {{$cliente->nome}}
                    </p>
                </div>
                <div class="ml-5">
                    <a href="{{route('meus.clientes',Auth::user()->id)}}"><button class="hover:bg-blue-400 bg-blue-500 text-white rounded py-2 px-4" type="button">
                    <i class="fa-solid fa-right-from-bracket"></i> voltar
                    </button></a>
                    <a href="{{route('cliente.edit',$cliente->id)}}"><button class="hover:bg-purple-400 bg-purple-500 text-white rounded py-2 px-4" type="button">
                    <i class="fa-solid fa-pen-to-square"></i> editar</button></a>
                    <a href="{{route('confirma.delete',$cliente->id)}}"><button class="hover:bg-red-400 bg-red-500 text-white rounded py-2 px-4" type="button">
                    <i class="fa-solid fa-delete-left"></i> deletar</button></a>
                </div>
                <div class="pt-3 p-6 text-gray-900 dark:text-gray-50">
                    <p><strong>Nome: {{$cliente->nome}}</strong></p>
                    <p><strong>E-mail: {{$cliente->email}}</strong>   |   <strong> Tel:  {{$cliente->telefone}}</strong></p>
                    <p><strong>Empresa: {{$cliente->empresa}}</strong></p>
                    <p><strong>Telefone Comercial: {{$cliente->tel_comercial}}</strong></p>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
