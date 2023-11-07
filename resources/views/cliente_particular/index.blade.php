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
                        <th>Codigo de cliente</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th># CC</th>
                        <th>Fecha de nacimiento</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente_particular as $clp)
                        <tr>
                            <td>{{ $clp->Cod_Cliente_Part }}</td>
                            <td>{{ $clp->Nombres }}</td>
                            <td>{{ $clp->Apellidos }}</td>
                            <td>{{ $clp->Direccion }}</td>
                            <td>{{ $clp->Telefono }}</td>
                            <td>{{ $clp->Num_CC }}</td>
                            <td>{{ $clp->Fecha_Nac }}</td>
                            <td>{{ $clp->Correo }}</td>
                            <td>
                                <a href="{{ URL::action('App\Http\Controllers\ClienteParticularController@edit', $clp->Cod_Cliente_Part) }}"><button class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $clp->Cod_Cliente_Part }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('cliente_particular.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

