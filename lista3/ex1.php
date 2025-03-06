<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menor Valor e Posição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Insira 7 números diferentes:</h2>
      <h4>O programa encontrará o menor valor e sua posição.</h4>
      <form method="post" action="">
        <?php
        $i = 1;
        while ($i <= 7 ){
            echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
            echo '<input type="number" name="numero' . $i . '" required><br><br>';
            $i++;
        }
        ?>
        <input type="submit" class="btn btn-primary" value="Encontrar Menor Valor">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $menorValor = null;
          $posicaoMenor = null;

          for ($i = 1; $i <= 7; $i++) {
              $numero = $_POST['numero' . $i]; 

              if ($menorValor === null || $numero < $menorValor) {
                  $menorValor = $numero;
                  $posicaoMenor = $i;
              }
          }

          echo "<h3>O menor valor é: $menorValor</h3>";
          echo "<h3>A posição do menor valor na sequência de entrada é: $posicaoMenor</h3>";
      }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>