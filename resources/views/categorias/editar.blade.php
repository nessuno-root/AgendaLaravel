@extends('layouts/agenda')

@section('tituloPagina', 'Editar Grupo')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar</h2>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <form action="{{route('categorias.update',$categorias->id_categoria)}}" method="post">
                                @csrf
                                @method('PUT')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control"name="nombre" id="nombre" 
                                required value="{{$categorias->nombre}}">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" 
                                class="form-control">{{$categorias->descripcion}}</textarea>
                                <br>
                                <button class="btn btn-warning">Actualizar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
