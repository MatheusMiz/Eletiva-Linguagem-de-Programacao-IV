<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira o capital, juros e periodo</h2>
    <form method="post" action="">
        <label for="cap">Capital:</label>
        <input type="double" name="cap" required><br><br>
        <label for="j">Juros:</label>
        <input type="double" name="j" required><br><br>
        <label for="p">Periodo:</label>
        <input type="int" name="p" required><br><br>
    
        
        
        <input type="submit" class="btn btn-success" value="Calcular Juros Composto">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $capital = $_POST['cap'];
        $taxa = $_POST['j'];
        $periodo = $_POST['p'];
        $total = $capital * (1 + $taxa) ** $periodo;

        echo "Capital: $capital <br> Taxa: $taxa <br> Periodo: $periodo";
        echo "<h3>Total: " . $total. "</h3>";

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>