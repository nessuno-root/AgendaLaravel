@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar Grupo')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar</h2>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                ¿Estás seguro de que quieres eliminar este grupo?
                                <p>Go ahead !</p>
                                <table class="table table-sm">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $categorias->nombre }}</td>
                                            <td>{{ $categorias->descripcion }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <form action="{{route('categorias.destroy',$categorias->id_categoria)}}" method ="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class = "btn btn-danger">DESTROY</button>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
