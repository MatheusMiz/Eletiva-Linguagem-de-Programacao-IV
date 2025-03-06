<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<h2>Digite um valor:</h2>
    <form method="post" action="">
        <label for="mes">valor:</label>
        <input type="number" name="mes" required><br><br>

        
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes= $_POST['mes'];
        switch($mes){
            case 1:
                echo"1 - Janeiro";
                break;
            case 2:
                echo"2 - Fevereiro";
                break;
            case 3:
                echo"3 - Março";
                break;
            case 4:
                echo"4 - Abril";
                break;
            case 5:
                echo"5 - Maio";
                break;
            case 6:
                echo"6 - Junho";
                break;
            case 7:
                echo"7 - Julho";
                break;
            case 8:
                echo"8 - Agosto";
                break;
            case 9:
                echo"9 - Setembro";
                break;
            case 10:
                echo"10 - Outubro";
                break;
            case 11:
                echo"11 - Novembro";
                break;
            case 12:
                echo"12 - Dezembro";
                break;
        }
    
        

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>