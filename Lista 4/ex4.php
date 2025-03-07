<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <form method="post" action="ex4resposta.php">
                        
        <div class="mb-3">
            <label for="dia" class="form-label">Digite um dia</label>
            <input type="number" id="dia" name="dia" class="form-control" required="">
            <label for="mes" class="form-label">Digite um mes</label>
            <input type="number" id="mes" name="mes" class="form-control" required="">
            <label for="ano" class="form-label">Digite um ano</label>
            <input type="number" id="ano" name="ano" class="form-control" required="">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>