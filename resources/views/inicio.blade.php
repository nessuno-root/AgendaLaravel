@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <h2></h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img src="{{asset('/img/agenda.png')}}" alt="" width="40%">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
