<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i = 0; $i < 5; $i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome" required />
            <input type="text" name="tel[]" placeholder="Telefone" required />
            <br/>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomes = $_POST['nome'];
        $tels = $_POST['tel'];
        $contatos = [];

        $nomesUsados = [];
        $telsUsados = [];
        $erros = [];

        for ($i = 0; $i < 5; $i++) {
            $nome = trim($nomes[$i]);
            $tel = trim($tels[$i]);

            if (in_array($nome, $nomesUsados)) {
                $erros[] = "Nome duplicado: $nome";
                continue;
            }

            if (in_array($tel, $telsUsados)) {
                $erros[] = "Telefone duplicado: $tel";
                continue;
            }

            $nomesUsados[] = $nome;
            $telsUsados[] = $tel;

            $contatos[$nome] = $tel;
        }

        if (!empty($erros)) {
            echo "<h3>Erros encontrados:</h3><ul>";
            foreach ($erros as $erro) {
                echo "<li>$erro</li>";
            }
            echo "</ul>";
        }

        if (!empty($contatos)) {
            ksort($contatos); 
            echo "<h3>Contatos ordenados:</h3><ul>";
            foreach ($contatos as $nome => $tel) {
                echo "<li><strong>$nome:</strong> $tel</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
