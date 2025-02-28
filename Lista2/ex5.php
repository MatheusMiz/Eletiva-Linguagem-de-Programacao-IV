<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" >Lista 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ex1.php">Ex 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex2.php">Ex 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex3.php">Ex 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex4.php">Ex 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex5.php">Ex 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 6</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 7</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 8</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 9</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 10</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 11</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 12</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 13</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 14</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 15</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 16</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 17</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 18</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 19</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ex 20</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h2>Insira dois números para subtrair:</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="double" name="nota1" required><br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="double" name="nota2" required><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="double" name="nota3" required><br><br>
        
        <input type="submit" class="btn btn-info" value="Media">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "Nota da 1º prova: $nota1 ";
        echo "Nota da 2º prova: $nota2 ";
        echo "Nota da 3º prova: $nota3 ";
        echo "<h3>Media da nota: $media </h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
