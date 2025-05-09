<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Validação de Idade</h1>

     <?php
    function validarIdade($idade) {
        if ($idade < 18) {
            return "Menor de idade";
        } elseif ($idade >= 60) {
            return "Idoso";
        } else {
            return "Adulto";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idade = intval($_POST['idade']);
        $resultado = validarIdade($idade);
        echo "<p>Resultado: <strong>$resultado</strong></p>";
    }
    ?>

            <form action="index.php" method="get">
            <button type="submit">Voltar</button>
        </form>
    </div>
</body>
</html>