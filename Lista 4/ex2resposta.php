<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
        function maiusculo(string $palavra) : void {
            echo "Palavra $palavra em maiusculo: ". strtoupper($palavra). "<br/>";
        }
        function minusculo (string $palavra): void{
            echo"Palavra $palavra em minusculo: ". strtolower($palavra);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $palavra=$_POST['palavra'];
                maiusculo($palavra);
                minusculo($palavra);
            } catch(Exception $e){
                echo "Erro";
            }
        }

    ?>
            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>