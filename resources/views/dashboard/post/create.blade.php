@extends('dashboard.post.master')
@section('titulo', 'AgregarPost')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Registar post</h1>

<form action="{{ route('post.store') }}"method="post">
    @csrf
    <main> {{-- fila uno --}}
        <div class="row"> 
            <div class="form-group">
                <label for="name">Articulo</label>
                <input type="text" class="forn-control " name="name" id="name"><br>
                <div class="row form-group"> 
                    <label for="description">Contenido</label> 
                    <textarea class="form-control"  name="description" id="description " cols="30" rows="10"></textarea>
                </div><br> {{-- saltar linea --}}
                {{-- combobox --}}
                <div class="row form-group">     
                    <label for="description">Categoria</label>  
                    <select name="category" id="category"> 
                        <option value="">Selecionar Una Categoria</option>
                        @foreach ( $category as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div> <br>

            <div class="row center">
                    <div class="col s6">
                        <button class="btn btn-success" type= "submit" >Publicar</button>
                        <a href="{{ url('dashboard/post' ) }}" class="btn btn-danger">Cancelar</a>
                    </div>
               
            </div>
               </div>

        </div>
    </main>
</form>


@endsection