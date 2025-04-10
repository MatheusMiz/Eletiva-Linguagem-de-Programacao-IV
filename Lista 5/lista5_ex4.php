<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i = 0; $i < 5; $i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome" required />
            <input type="number" name="preco[]" placeholder="Preço" required />
            <br/>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $precos = $_POST['preco'];
        $nomes = $_POST['nome'];
        $itens = [];



        for ($i = 0; $i < 5; $i++) {
            $nome = trim($nomes[$i]);
            $preco = (float) $precos[$i];

            $precoImposto = $preco * 1.15;

            $itens[$nome] = $precoImposto;

           
        }


        if (!empty($itens)) {
            asort($itens); 
            echo "<h3>Lista do items com um 15% de imposto:</h3><ul>";
            foreach ($itens as $nome => $preco) {
                echo "<li><strong>Nome:</strong> $nome | <strong>Preços com imposto:" . number_format($preco, 2, ',', '.') . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
