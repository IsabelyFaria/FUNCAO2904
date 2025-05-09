<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Numeros maiores</h1>

    <?php
        function maiorNumero($a, $b, $c) {
            return max($a, $b, $c);
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
    
            $maior = maiorNumero($num1, $num2, $num3);
            echo "<h2>O maior número é: $maior</h2>";
        }
        ?>

            <form action="index.php" method="get">
            <button type="submit">Voltar</button>
        </form>
    </div>
</body>
</html>
