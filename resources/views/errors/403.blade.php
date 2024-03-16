<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Erro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Olá <strong>{{ Auth::user()->name }}</strong></p>
                </div>

                <p class="text-center bg-red-500 text-white p-4 rounded-lg ">
                    Esta página é autorizada apenas para administradores.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
