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
                        <th>Empresa</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cargo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th># CC</th>
                        <th>Fecha de nacimiento</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente_empresarial as $cle)
                        <tr>
                            <td>{{ $cle->Cod_Cliente_Emp }}</td>
                            <td>{{ $cle->Cod_Empresa }}</td>
                            <td>{{ $cle->Nombres }}</td>
                            <td>{{ $cle->Apellidos }}</td>
                            <td>{{ $cle->Cargo }}</td>
                            <td>{{ $cle->Direccion }}</td>
                            <td>{{ $cle->Telefono }}</td>
                            <td>{{ $cle->Num_CC }}</td>
                            <td>{{ $cle->Fecha_Nac }}</td>
                            <td>{{ $cle->Correo }}</td>
                            <td>
                                <a href="{{ URL::action('App\Http\Controllers\ClienteEmpresarialController@edit', $cle->Cod_Cliente_Emp) }}"><button class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $cle->Cod_Cliente_Emp }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('cliente_empresarial.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

