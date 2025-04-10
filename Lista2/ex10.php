<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira a largura e a altura de um retangulo</h2>
    <form method="post" action="">
        <label for="B">Largura:</label>
        <input type="double" name="B" required><br><br>
        <label for="H">Altura:</label>
        <input type="double" name="H" required><br><br>
        
        
        <input type="submit" class="btn btn-info" value="Calcular o perímetro de um retangulo">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $L = $_POST['B'];
        $A = $_POST['H'];
        $P = 2 * ($L + $A);

        echo "O perimetro de um retangulo de largura $L e altura $A é ";
        echo "<h3>Perimetro: $P </h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>