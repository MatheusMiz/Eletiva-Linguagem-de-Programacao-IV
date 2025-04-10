<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i = 0; $i < 5; $i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome" required />
            <input type="double" name="nota1[]" placeholder="Telefone" required />
            <input type="double" name="nota2[]" placeholder="Telefone" required />
            <input type="double" name="nota3[]" placeholder="Telefone" required />
            <br/>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomes = $_POST['nome'];
        $notas1 = $_POST['nota1'];
        $notas2 = $_POST['nota2'];
        $notas3 = $_POST['nota3'];
        $medias = [];


        for ($i = 0; $i < 5; $i++) {
            $nome = trim($nomes[$i]);
            $nota1 = $notas1[$i];
            $nota2 = $notas2[$i];
            $nota3 = $notas3[$i];
            $media = ($nota1 + $nota2 + $nota3)/3;
            $medias[$nome] = $media;
        
        }


        if (!empty($medias)) {
            asort($medias); 
            echo "<h3>Lista de alunos ordenados pelas medias:</h3><ul>";
            foreach ($medias as $nome => $media) {
                echo "<li><strong>$nome:</strong> " . number_format($media, 2, ',', '.') . "</li>";

            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
