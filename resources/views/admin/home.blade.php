Você está correto! Se deseja que o conteúdo ocupe 100% da largura da tela, você pode usar a classe `container-fluid` do Bootstrap em vez da classe `container`. Vou ajustar o código conforme sua sugestão:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Sistema do Admin - Página Inicial</title>
    <style>
        body {
            background-color: #f0f8ff;
            color: #333;
            padding: 20px;
            font-family: 'Arial', sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .menu {
            background-color: #333;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .menu a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        .welcome-text {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-logout {
            background-color: #dc3545;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        .room-card {
            background-color: #fff;
            border: 1px solid #ddd;
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
</head>
<body>

<div class="container-fluid">
    <div class="header">
        <h1>Sistema do Admin</h1>
    </div>

    <div class="menu">
        <a href="#">Reservas</a>
        <a href="#">Salas</a>
        <a href="#">Usuários</a>
    </div>

    <div class="welcome-text">
        <h2>Bem-vindo, [Nome do Admin]!</h2>
        <p>Aqui está a página inicial do sistema.</p>
    </div>

    <!-- Conteúdo da Página Inicial -->
    <div>
        <h2>Salas Reservadas</h2>

        <!-- Sala Reservada 1 -->
        <div class="room-card">
            <div class="room-info">
                <div>
                    <div class="room-title">Reunião com Equipe</div>
                    <div class="room-time">10:00 - 11:00</div>
                </div>
                <div>
                    <button class="btn btn-primary">Cancelar Reserva</button>
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
                    <button class="btn btn-primary">Cancelar Reserva</button>
                </div>
            </div>
            <p>Sala: B</p>
            <p>Descrição: Entrevista com candidato para a posição de desenvolvedor.</p>
        </div>

    </div>

    <div class="btn-container">
        <a href="logout.html" class="btn btn-logout">Sair</a>
    </div>
</div>

<!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```

Agora, a classe `container-fluid` é utilizada para garantir que o conteúdo preencha 100% da largura da tela. Isso proporciona uma experiência de tela cheia. Sinta-se à vontade para ajustar conforme necessário!
