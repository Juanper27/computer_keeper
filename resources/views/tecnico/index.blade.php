@extends('layouts.plantilla')
@section('contenido')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
        <table id="datatablesSimple" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo de Tecnico</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th># CC</th>
                        <th>Fecha de ingreso</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Fecha de nacimiento</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tecnico as $tec)
                        <tr>
                            <td>{{ $tec->Cod_Tecnico}}</td>
                            <td>{{ $tec->Nombres }}</td>
                            <td>{{ $tec->Apellidos }}</td>
                            <td>{{ $tec->Num_CC }}</td>
                            <td>{{ $tec->Fecha_Ingreso }}</td>
                            <td>{{ $tec->Direccion }}</td>
                            <td>{{ $tec->Telefono }}</td>
                            <td>{{ $tec->Fecha_Nac }}</td>
                            <td>
                                <a href="{{ URL::action('App\Http\Controllers\TecnicoController@edit', $tec->Cod_Tecnico) }}"><button class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $tec->Cod_Tecnico }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('tecnico.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

