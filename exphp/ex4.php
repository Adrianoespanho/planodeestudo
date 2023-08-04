<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Idade</title>
</head>
<body>
    <h1>Verificação de Idade</h1>
    <form action="" method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = intval($_POST['idade']);

        if ($idade >= 18) {
            echo "<p>Você é maior de 18 anos.</p>";
        } else {
            echo "<p>Você é menor de 18 anos.</p>";
        }
    }
    ?>
</body>
</html>

