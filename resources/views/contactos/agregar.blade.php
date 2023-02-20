@extends('layouts/agenda')

@section('tituloPagina', 'Agregar Contacto')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar nuevo contacto</h2>

                            <hr>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <form action="{{ route('contactos.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select" required>
                                    <option value="">Selecciona una opcion</option>
                                    @foreach ($categorias as $item)
                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>


                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" class="form-control" name="nombre" required>

                                <label for="paterno">Apellido paterno</label>
                                <input type="text" id="paterno" class="form-control" name="paterno" required>

                                <label for="materno">Apellido materno</label>
                                <input type="text" id="materno" class="form-control" name="materno" required>


                                <label for="telefono">Teléfono</label>
                                <input type="text" id="telefono" class="form-control" name="telefono" required>

                                <label for="email">E-mail</label>
                                <input type="text" id="email" class="form-control" name="email" required>


                                <br>
                                <button class="btn btn-primary">
                                    <span class="fas fa-user-plus"></span>Agregar
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
