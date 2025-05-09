<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Fahrenheit para Celsius</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Conversor de Fahrenheit para Celsius</h1>

     <?php
    function converterParaCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5 / 9;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = converterParaCelsius($fahrenheit);
        echo "<p>$fahrenheit °F é equivalente a " . number_format($celsius, 2) . " °C.</p>";
    }
    ?>

            <form action="index.php" method="get">
            <button type="submit">Voltar</button>
        </form>
    </div>
</body>
</html>