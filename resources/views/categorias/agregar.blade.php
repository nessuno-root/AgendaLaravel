@extends('layouts/agenda')

@section('tituloPagina', 'Agregar Nuevo Grupo')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Grupos</h2>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <form action="{{route('categorias.store')}}" method="post">
                                @csrf
                                @method('POST')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control"name="nombre" id="nombre" required>
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"></textarea>
                                <br>
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
