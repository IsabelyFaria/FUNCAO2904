<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <h1>Multiplicação de Números</h1>

    <?php
    function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
    }
    ?>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $resultado = multiplicar($numero1, $numero2);
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>

    <form action="index.php" method="get">
    <button type="submit">Voltar</button>
    </form>
</div>

</body>
</html>