<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira a Base e a Altura de um retangulo:</h2>
    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="double" name="base" required><br><br>
        <label for="altura">Altura:</label>
        <input type="double" name="altura" required><br><br>
        
        
        <input type="submit" class="btn btn-primary" value="Calcular a base de um retangulo">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $H = $_POST['altura'];
        $B =  $_POST['base'];
        $a = $B * $H;

        echo "A área de um retangulo de base $B e altura $H é ";
        echo "<h3>Base: $a </h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>