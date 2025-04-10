<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i = 0; $i < 5; $i++): ?> 
            <input type="text" name="codigo[]" placeholder="Código" required />
            <input type="text" name="nome[]" placeholder="Nome" required />
            <input type="number" name="preco[]" placeholder="Preço" required />
            <br/>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $codigos = $_POST['codigo'];
        $precos = $_POST['preco'];
        $nomes = $_POST['nome'];
        $produtos = [];



        for ($i = 0; $i < 5; $i++) {
            $codigo = trim($codigos[$i]);
            $nome = trim($nomes[$i]);
            $preco = (float) $precos[$i];

            if ($preco > 100){
                $preco *= 0.9;
            }

            $produtos[$codigo] = [
                'nome' =>$nome,
                'preco' =>$preco
            ];

           
        }


        if (!empty($produtos)) {
            ksort($produtos); 
            echo "<h3>Lista de Produtos com Desconto Aplicado:</h3><ul>";
            foreach ($produtos as $codigo => $dados) {
                echo "<li><strong>Código:</strong> $codigo | <strong>Nome:</strong>{$dados['nome']} | <strong>Preço:</strong> R$". number_format($dados['preco'], 2, ",", ".")."</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
