<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<h2>Insira valores para A e B:</h2>
    <form method="post" action="">
        <label for="numero1">A:</label>
        <input type="number" name="numero1" required><br><br>
        
        <label for="numero2">B:</label>
        <input type="number" name="numero2" required><br><br>
        
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        if ($numero1 != $numero2){
            if($numero1 < $numero2) {
                echo "<h3> $numero1 $numero2 </h3>";
            }
            else {
                echo "<h3> $numero2 $numero1 </h3>";
            }
        }
        else{
            echo "<h3>$numero1</h3>";
        }

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>