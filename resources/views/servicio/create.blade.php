@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar servicio</h4>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{!! Form::open(array('url' => 'servicio', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cod_Equipo">Codigo del equipo</label>
            <input type="text" name="Cod_Equipo" id="Cod_Equipo" class="form-control" placeholder="Digite el codigo del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cod_Tecnico">Codigo del tecnico</label>
            <input type="text" name="Cod_Tecnico" id="Cod_Tecnico" class="form-control" placeholder="Digite codigo del cliente">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id="Estado" class="form-control" placeholder="Digite estado del servicio">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Clasificacion">Clasificacion</label>
            <input type="text" name="Clasificacion" id="Clasificacion" class="form-control" placeholder="Digite clasificacion del servicio">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Categoria">Categoria</label>
            <input type="text" name="Categoria" id="Categoria" class="form-control" placeholder="Digite Categoria del servicio">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Detalle_Servicio">Detalle del servicio</label>
            <input type="text" name="Detalle_Servicio" id="Detalle_Servicio" class="form-control" placeholder="Digite detalle del servicio">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Observaciones">Observaciones</label>
            <input type="text" name="Observaciones" id="Observaciones" class="form-control" placeholder="Digite observaciones del servicio">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{ url('servicio') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
