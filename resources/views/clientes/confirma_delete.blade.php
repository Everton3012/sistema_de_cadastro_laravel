<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4"><strong>{{ Auth::user()->name }}</strong></p>
                    <p class="mb-4">
                        Gostaria mesmo de excluir o cliente: {{$id->nome}} <br/>
                        Não será possivel desfazer esta ação.
                    </p>
                    <form action="{{ route('cliente.destroy', $id->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="text-red-500">Sim</button>
                        <a href="{{ route('cliente.show', $id->id) }}">Não</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
