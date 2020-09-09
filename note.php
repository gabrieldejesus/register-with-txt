<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Register with txt</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">  <!-- Font -->
</head>
<body>
    <main>
        <div class="container column">
        <?php
            $contents = file_get_contents('note.txt'); // ler arquivo
            $contents = explode("\n", $contents); // quebrar texto por linhas
            $contents = implode(' ', $contents); // transformando em string
            echo $contents;
        ?>
        <a href="index.php">Criar nova anotação</a>
        </div>
    </main>
</body>
</html>