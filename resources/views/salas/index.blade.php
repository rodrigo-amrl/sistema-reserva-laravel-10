@extends('layout.principal')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item active">Salas</li>
        </ol>
        <ul class="app-actions">

            <li>
                <button class="btn btn-primary" onclick="window.location='{{ route('sala.create') }}'">Nova Sala</button>
            </li>
        </ul>
    </div>
    <div class="main-container">
        <div class="table-container">
            <div class="t-header">Lista de Salas</div>
            <div class="table-responsive">
                <table id="basicExample" class="table custom-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Capacidade</th>
                            <th>Status</th>
                            <th>Atualizado em</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="fase">
                                        Opções
                                    </button>
                                    <div class="dropdown-menu" data-popper-placement="bottom-start"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 35.2px, 0px);">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
