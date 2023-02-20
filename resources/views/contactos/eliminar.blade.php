@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar Contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar contacto</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">                              
                                <p>Go ahead!</p>
                                <table class="table table-hover">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Apellido Materno</th>
                                        <th>Apellido Paterno</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $contacto->nombre }}</td>
                                            <td>{{ $contacto->materno }}</td>
                                            <td>{{ $contacto->paterno }}</td>
                                            <td>{{ $contacto->telefono }}</td>
                                            <td>{{ $contacto->email }}</td>                                          
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="{{route('contactos.destroy',$contacto->id_contacto)}}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class ="btn btn-danger">
                                        <span class="fas fa-user-times"></span>
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
