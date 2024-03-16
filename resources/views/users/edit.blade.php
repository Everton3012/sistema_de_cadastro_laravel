<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edição de Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 mb-4">
                    <p class="mb-4">Editando nivel de acesso do Usuario <strong>{{$user->name}}</strong></p>
                    <p class="mb-4">Nivel de acesso atual: <strong>{{ $user->level }}</strong></p>
                </div>
                <div class="p-6 text-white">
                   <form action="{{ route('user.update' , $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="level">Selecione o nivel</label><br/>
                    <select required name="level" class="py-1 px-8 rounded text-gray-900 ">
                        <option selected disabled>Selecione uma opção</option>
                        <option value="user">Usuário Comun</option>
                        <option value="admin">Administrador</option>
                    </select>
                    <button class="bg-blue-500 text-white rounded py-2 px-4" type="submit">
                        <i class="fa-regular fa-floppy-disk mr-2"></i>salvar alterações</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
