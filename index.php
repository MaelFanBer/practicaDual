<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>
<body>
    <h1>Random Number Generator (RNG)</h1>
    <p>
        <?php
            if(isset($_GET["min"]) && isset($_GET["max"])) {
                if ($_GET["max"] < $_GET["min"]) {
                    echo "<span class='error'>*ERROR: El valor mínimo es más grande que el máximo. Por favor, escribelo de nuevo.<span>";
                } else {
                    echo "Numero aleatorio entre ".$_GET["min"]." y ".$_GET["max"].": ".random_int($_GET["min"], $_GET["max"]);
                }
            } else {
                echo "Escribe un rango de números a usar: ";
            }
        ?>
    </p>
    <form action="index.php" method="get">
        <h3>Elegir rango de números:</h3>
        <input type="number" name="min" id="min" placeholder="valor mínimo">
        <input type="number" name="max" id="max" placeholder="valor máximo">
        <input type="submit" value="Asignar">
    </form>
</body>
</html>