<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira uma temperatura em Celsius:</h2>
    <form method="post" action="">
        <label for="celsius">Temperatura:</label>
        <input type="double" name="celsius" required><br><br>
        
        
        <input type="submit" class="btn btn-info" value="Converter para Fahrenheit">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $TempC = $_POST['celsius'];
        $fahrenheit = $TempC * 1.8 + 32;

        echo "A conversão de $TempC celsius para fahrenheit é ";
        echo "<h3>Fahrenheit: $fahrenheit </h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>