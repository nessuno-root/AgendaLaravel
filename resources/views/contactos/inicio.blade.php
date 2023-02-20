@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Contactos</h2>
                            <a href="{{ route('contactos.create') }}" class="btn btn-primary">

                                <span class="fas fa-user-plus"></span> Agregar nuevo contacto
                            </a>
                            <hr>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <table class="table table-hover" id="tablaContactos">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Teléfono</th>
                                    <th>E-mail</th>
                                    <th>Categoría</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($listado as $item)
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->paterno }}</td>
                                            <td>{{ $item->materno }}</td>
                                            <td>{{ $item->telefono }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->nombre_categoria }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('contactos.edit', $item->id_contacto) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <span class="fas fa-user-edit"></span>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('contactos.show', $item->id_contacto) }}"
                                                    class="btn btn-danger btn-sm">
                                                    <span class="fas fa-user-times"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
