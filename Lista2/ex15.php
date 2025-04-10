<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira seu peso e sua altura</h2>
    <form method="post" action="">
        <label for="p">Peso:</label>
        <input type="double" name="p" required><br><br>
        <label for="h">Altura:</label>
        <input type="double" name="h" required><br><br>
    
        
        
        <input type="submit" class="btn btn-success" value="Calcular IMC">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $peso = $_POST['p'];
        $altura = $_POST['h'];
        $imc = $peso / ($altura ** 2);

        echo "Peso: $peso <br> Altura: $altura";
        echo "<h3>IMC: " . number_format($imc, 2) . "</h3>";

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>