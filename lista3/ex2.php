<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<h2>Insira dois números para somar:</h2>
<h4>Caso os dois numeros forem iguais, a soma será triplicada </h4>
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>
        
        <input type="submit" class="btn btn-primary" value="Somar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        if ($numero1 == $numero2){
            $soma = ($numero1 + $numero2) * 3;
            echo "<h3>Resultado: ($numero1 + $numero2) x 3 = $soma</h3>";
        }
        else{
            $soma = $numero1 + $numero2;
            echo "<h3>Resultado: $numero1 + $numero2 = $soma</h3>";
        }

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>