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
        function verificarString(string $palavra, string $palavra2) : void {
            
            if(strpos($palavra, $palavra2) == TRUE){
                echo "Palavra $palavra2 está contida na palavra $palavra : Pode ser encontrada a partir da posição". strpos($palavra, $palavra2). "<br/>";
            }
            else
                echo"A palavra $palavra2 não está  contidada na palavra $palavra";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $palavra=$_POST['palavra'];
                $palavra2=$_POST['palavra2'];
                verificarString($palavra, $palavra2);
            } catch(Exception $e){
                echo "Erro";
            }
        }

    ?>
            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>