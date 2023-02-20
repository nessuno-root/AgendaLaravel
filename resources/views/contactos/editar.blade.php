@extends('layouts/agenda')

@section('tituloPagina', 'Editar Contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar contacto</h2>

                            <hr>
                        </div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-12">
                            <form action="{{ route('contactos.update', $contacto->id_contacto) }}"method="post">
                                @csrf
                                @method('PUT')

                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select">
                                    @foreach ($categorias as $item)
                                        @if ($item->id_categoria == $contacto->id_categoria)
                                            <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                        @else
                                            <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" class="form-control" name="nombre" required
                                    value="{{ $contacto->nombre }}">


                                <label for="materno">Apellido materno</label>
                                <input type="text" id="materno" class="form-control" name="materno" required
                                    value="{{ $contacto->materno }}">


                                <label for="nombre">Apellido paterno</label>
                                <input type="text" id="paterno" class="form-control" name="paterno" required
                                    value="{{ $contacto->paterno }}">


                                <label for="nombre">Teléfono</label>
                                <input type="text" id="telefono" class="form-control" name="telefono" required
                                    value="{{ $contacto->telefono }}">

                                <label for="nombre">E-mail</label>
                                <input type="text" id="email" class="form-control" name="email" required
                                    value="{{ $contacto->email }}">

                                <br>
                                <button class="btn btn-warning">
                                    <span class="fas fa-user-edit"></span> Actualizar
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
