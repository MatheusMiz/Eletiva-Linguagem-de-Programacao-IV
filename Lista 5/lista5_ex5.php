<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i = 0; $i < 5; $i++): ?> 
            <input type="text" name="titulo[]" placeholder="Titulo" required />
            <input type="number" name="estoque[]" placeholder="Quantidade de Estoque:" required />
            <br/>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $estoques = $_POST['estoque'];
        $titulos = $_POST['titulo'];
        $livros = [];



        for ($i = 0; $i < 5; $i++) {
            $titulo = trim($titulos[$i]);
            $estoque = (int) $estoques[$i];


            $livros[$titulo] = $estoque;

           
        }


        if (!empty($livros)) {
            ksort($livros); 
            echo "<h3>Lista ordenada pelos titulos dos livros:</h3><ul>";
            foreach ($livros as $titulo => $estoque) {
                if( $estoque < 5){
                    echo "<li><strong>$titulo:</strong> $estoque unidades <span style='color: red;'>(Baixo Quantidade de Estoque!)</span></li>";
                }
                else    
                    echo"<li><strong>Título:</strong> $titulo | <strong>Quantidade:</strong> $estoque</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
