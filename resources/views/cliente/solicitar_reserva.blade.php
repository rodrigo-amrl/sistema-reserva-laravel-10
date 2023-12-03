<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Solicitar Reserva</title>
    <style>
        body {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: #fff;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Solicitar Reserva</h2>

    <div class="form-container">
        <form action="#" method="post">
            <div class="form-group">
                <label for="room">Sala de Reunião:</label>
                <select id="room" name="room" class="form-control" required>
                    <option value="A">Sala A</option>
                    <option value="B">Sala B</option>
                    <!-- Adicione mais salas conforme necessário -->
                </select>
            </div>

            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="startTime">Hora de Início:</label>
                <input type="time" id="startTime" name="startTime" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="endTime">Hora de Término:</label>
                <input type="time" id="endTime" name="endTime" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Solicitar Reserva</button>
        </form>
    </div>

</div>

<!-- Links do Bootstrap para a versão 5 sem os atributos integrity e crossorigin -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
