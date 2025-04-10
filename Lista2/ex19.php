<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>Insira um valor</h2>
    <form method="post" action="">
        <label for="dia">Dia:</label>
        <input type="int" name="dia" required><br><br>
    
        
        
        <input type="submit" class="btn btn-success" value="Converter dias para horas, minutos e segundos">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $dias = $_POST['dia'];
        if( $dias < 0 )
        {
            echo"<p> Insira um valor válido </p>";
        }
        else{
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;
        }

        echo "$dias equivalem a: ";
        echo"<ul>
                <li><strong>$horas horas </strong> </li>
                <li><strong>$minutos minutos</strong> </li>
                <li><strong>$segundos segundos </strong> </li>
            </ul>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>