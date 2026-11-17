<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enigma 9</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .caja {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-top: 0;
        }
        .adivinanza {
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #34495e;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            color: #155724;
        }
    </style>
</head>
<body>

<div class="caja">
    <h2>Reto PHP - Número 9</h2>

    <!-- Aquí se muestran las adivinanzas -->
    <div class="adivinanza">
        <strong>Enigma 1:</strong> En Fortnite no soy ni oro ni soy bronce. ¿Cuál es mi nombre original en inglés?
    </div>
    <div class="adivinanza">
        <strong>Enigma 2:</strong> Quédate cerquita mío, yo te puedo curar, pero solo si estás conmigo.
    </div>

    <!-- Formulario -->
    <form method="POST">
        <label>Número inicial:</label>
        <input type="number" name="numero" value="9">

        <label>Respuesta Enigma 1:</label>
        <input type="text" name="enigma1" placeholder="Escribe la respuesta...">

        <label>Respuesta Enigma 2:</label>
        <input type="text" name="enigma2" placeholder="Escribe la respuesta...">

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $num = $_POST['numero'];
        $e1 = $_POST['enigma1'];
        $e2 = $_POST['enigma2'];

        $resultado = $num + strlen($e1) + strlen($e2);

        echo "<div class='resultado'>";
        echo "<strong>Resultado:</strong><br>";
        echo "Número inicial: " . $num . "<br>";
        echo "Enigma 1: " . $e1 . "<br>";
        echo "Enigma 2: " . $e2 . "<br><br>";
        echo "<strong>Tu nuevo número es: " . $resultado . "</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>