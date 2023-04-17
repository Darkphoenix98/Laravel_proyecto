<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <main>
                <div class="container py-4">
                    
            
                    <h2>Categorias</h2>
                    @can('crear-category')
                    <a href="{{ url('dashboard/category/create') }}"  class="btn btn-info">Nueva Categoria</a>
                    @endcan
                    
                    <table class="table table-success table-striped"> 
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>fecha de Cración</th>
                                <th>fecha de Modificaión</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $category )
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td>
                                        @can('editar-category')
                                        <a href="{{ ('category/'.$category->id.'/edit') }}"  class="bi bi-pencil" ></a></td>
                                        @endcan
            
                                    <td>
                                        @can('eliminar-category')
                                        <form action="{{ url('dashboard/category/'.$category->id) }}" method="post" >
                                            @method("DELETE")
                                            @csrf
                                            <button class="bi bi-eraser-fill" type="submit"></button>
                                        </form>
                                        @endcan
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </main>
    
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("logged") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
