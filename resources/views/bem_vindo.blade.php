<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Sistema de Reservas de Salas de Reunião</title>
    <style>
        body {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .welcome-text {
            text-align: center;
            color: #fff;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="welcome-text">
            <h1>Bem-vindo ao Sistema de Reservas de Salas de Reunião</h1>
            <p>Faça login para começar a reservar salas e gerenciar suas reuniões.</p>
        </div>

        <div class="btn-container">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>

    <!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
