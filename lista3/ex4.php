<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<h2>Informe o valor de um produto:</h2>
    <form method="post" action="">
        <label for="produto">A:</label>
        <input type="number" name="produto" required><br><br>

        
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto= $_POST['produto'];
    
        if ($produto > 100){    
            $desconto = $produto - ($produto * 0.15);
           echo "O produto de R$ $produto com o desconto de 15% é: $desconto";
        }
        else{
            echo "<h3>valor de R$ $produto</h3>";
        }

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
