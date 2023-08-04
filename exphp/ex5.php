<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <h1>Construção de Tabuada</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);

        echo "<h2>Tabuada do $numero:</h2>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    } else {
        echo '<form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" id="numero" name="numero" required>
                <button type="submit">Gerar Tabuada</button>
              </form>';
    }
    ?>
</body>
</html>
