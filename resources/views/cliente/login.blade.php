@extends('cliente.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Login</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('autenticar') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Entrar</button>

                <div class="register-link">
                    <p>Não tem uma conta? <a href="{{ route('cadastro') }}">Cadastre-se aqui</a>.</p>
                </div>
            </form>
        </div>
    </div>
@endsection
