<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Sala</title>
    <style>
        body {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .card {
            width: 400px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background-color: #f5f5f5;
            overflow: hidden;
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
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
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
    @vite(['resources/css/app.scss'])
</head>

<body>
    @yield('content')

    @vite(['resources/js/app.js'])
    <script type="module">
        $(document).ready(function() {
            @if (session()->has('sucesso'))
                toast.success("{{ session('sucesso') }}")
            @endif
            @if (session()->has('info'))
                toast.info("{{ session('info') }}")
            @endif
            @if (session()->has('erro'))
                toast.error("{{ session('erro') }}")
            @endif
        });
    </script>

</body>

</html>
