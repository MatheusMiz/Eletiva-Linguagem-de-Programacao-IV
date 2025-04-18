<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
        function verificarData(int $dia, int $mes, int $ano) : void {
            
            if(checkdate($mes, $dia, $ano) == TRUE){
                echo date("$dia/$mes/$ano");
            }
            else    
                echo "Data inválida";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $dia= (int)$_POST['dia'];
                $mes=(int)$_POST['mes'];
                $ano=(int)$_POST['ano'];
                verificarData($dia, $mes, $ano);
            } catch(Exception $e){
                echo "Erro";
            }
        }

    ?>
            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>