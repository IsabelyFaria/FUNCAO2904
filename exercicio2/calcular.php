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
    <h1>Verificar se um número é Par ou Ímpar</h1>
    
    <?php
    function parOuImpar($numero) {
    return ($numero % 2 === 0) ? "Par" : "Ímpar";}
    ?>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            $resultado = parOuImpar($numero);
            echo "<p>O número $numero é $resultado.</p>";
        }
        ?>


            <form action="index.php" method="get">
            <button type="submit">Voltar</button>
        </form>
    </div>
</body>
</html>

