<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Roles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @can('crear-rol')
                    <a href="{{ url('roles/create') }}" class="btn btn-info btn-sm">Nuevo Rol</a>

                    @endcan
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th>Permisos</th>
                                <th>Editar</th>
                                <th>Elimminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $rol)
                            <tr>
                            <td>{{ $rol->name }}</td>
                            <td>
                                @forelse ($rol->permissions as $permission)
                                <span class="badge text-bg-danger">{{ $permission->name }}</span>
                                    
                                @empty
                                <span class="badge text-bg-danger">
                                    No tiene permisos
                                </span>    
                                    
                                @endforelse
                            </td>
                            <td>
                                @can('editar-rol')
                                <a href="{{ url('roles/'.$rol->id.'/edit') }} " class="bi bi-pencil"></a></td>
            
                                @endauth
                            <td>
                                @can('borrar-rol')
                                    
                             
                                <form action="{{ url('roles/'.$rol->id) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button class="bi bi-eraser-fill" type="submit"> </button>
                                </form>
                                @endcan
                            </td>

                     </tr> 
                                
                            @empty
                                <p> No hay Roles </p>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
