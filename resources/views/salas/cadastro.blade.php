@extends('layout.principal')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sala.index') }}">Salas</a></li>
            <li class="breadcrumb-item active">Cadastro Sala</li>
        </ol>
        <ul class="app-actions">
            <li>
                <button class="btn btn-primary" type="submit">Button</button>
            </li>
        </ul>
    </div>
    <div class="main-container">
        <div class="row gutters">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Cadastro Sala</div>
                    </div>
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputName">Input Type</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Input Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputPwd">Password</label>
                                    <input type="password" class="form-control" id="inputPwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Readonly Input</label>
                                    <input class="form-control" id="inputReadOnly" type="text"
                                        placeholder="Readonly input" readonly="">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Disabled Input</label>
                                    <input type="text" id="disabledInput" class="form-control"
                                        placeholder="Disabled input" disabled="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
