@extends('dashboard.post.master')
@section('titulo', 'AgregarCategoria')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Categorias</h1>

<form action="{{ route('category.store') }}"method="post">
    @csrf
    <main> 
        <div class="row">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="forn-control " name="name" id="name">
                <div class="row form-group">
                    <label for="description">Descripcion</label> 
                    <textarea class="form-control"  name="description" id="description " cols="30" rows="10"></textarea>
                </div> <br>
            <div class="row center">
                    <div class="col s6">
                        <button class="btn btn-success" type= "submit" >Guardar</button>
                        <a href="{{ url('dashboard/category' ) }}" class="btn btn-danger">Cancelar</a>
                    </div>
               
            </div>
               </div>

        </div>
    </main>
</form>


@endsection