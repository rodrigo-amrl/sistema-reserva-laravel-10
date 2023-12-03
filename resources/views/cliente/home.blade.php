@extends('cliente.layout')
@section('content')
    <style>
        body {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: #fff;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .welcome-text {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-logout,
        .btn-reserve {
            background-color: #d9534f;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-logout:hover,
        .btn-reserve:hover {
            background-color: #c9302c;
        }

        .room-card {
            color: #6c757d;
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .room-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .room-title {
            font-size: 18px;
            font-weight: bold;
        }

        .room-time {
            color: #6c757d;
        }
    </style>


    <div class="container">
        <div class="welcome-text">
            <h1>Bem-vindo ao Sistema de Reservas de Salas de Reunião</h1>
            <p>Olá, [Nome do Usuário]! Aqui está a página inicial do sistema.</p>
        </div>

        <!-- Conteúdo da Página Inicial -->
        <div>
            <h2>Seus Próximos Compromissos</h2>

            <!-- Sala Reservada 1 -->
            <div class="room-card">
                <div class="room-info">
                    <div>
                        <div class="room-title">Reunião com Equipe</div>
                        <div class="room-time">10:00 - 11:00</div>
                    </div>
                    <div>
                        <button class="btn btn-reserve">Cancelar Reserva</button>
                    </div>
                </div>
                <p>Sala: A</p>
                <p>Descrição: Discussão de projetos pendentes.</p>
            </div>

            <!-- Sala Reservada 2 -->
            <div class="room-card">
                <div class="room-info">
                    <div>
                        <div class="room-title">Entrevista de Trabalho</div>
                        <div class="room-time">14:30 - 15:30</div>
                    </div>
                    <div>
                        <button class="btn btn-reserve">Cancelar Reserva</button>
                    </div>
                </div>
                <p>Sala: B</p>
                <p>Descrição: Entrevista com candidato para a posição de desenvolvedor.</p>
            </div>

            <div class="btn-container">
                <a href="{{ route('reserva.index') }}" class="btn btn-reserve">Fazer Nova Reserva</a>
                <a href="{{ route('logout') }}" class="btn btn-logout">Sair</a>
            </div>
        </div>

    </div>
@endsection
