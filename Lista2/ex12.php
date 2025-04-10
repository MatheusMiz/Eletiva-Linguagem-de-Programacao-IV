<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira a base e o expoente </h2>
    <form method="post" action="">
        <label for="B">Base:</label>
        <input type="double" name="B" required><br><br>
        <label for="E">Expoente:</label>
        <input type="double" name="E" required><br><br>
        
        
        <input type="submit" class="btn btn-info" value="Calcular base e expoente">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $base = $_POST['B'];
        $exp = $_POST['E'];
        $r = $base ** $exp;

        echo "A base $base elevado ao expoente $exp é ";
        echo "<h3>" . $r . "</h3>";

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>