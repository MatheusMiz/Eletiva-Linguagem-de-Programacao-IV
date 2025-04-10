<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira a distancia e o tempo</h2>
    <form method="post" action="">
        <label for="distancia">Distancia:</label>
        <input type="int" name="distancia" required><br><br>
        <label for="tempo">Tempo:</label>
        <input type="int" name="tempo" required><br><br>
    
        
        
        <input type="submit" class="btn btn-success" value="Calcular velocidade media">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $d = $_POST['distancia'];
        $t = $_POST['tempo'];
        $velocidade = $d/$t;

        echo"<p>A velocidade média é igual a ". number_format($velocidade, 2) ."</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>