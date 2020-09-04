<?php
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS); // pegando o titulo digitado e validando

// verificar se title está preenchido
if($title) {
    $titles = file_get_contents('note.txt'); // ler o texto
    $titles .= "\n<li>$title</li>"; // adicionar nova linha
    file_put_contents('note.txt', $titles); // adicionar o contéudo novo

    header("Location: note.php"); // depois de adicionar envia para a página note;
    exit;
} else {
    header("Location: index.php"); // se não tiver preenchido ele volta para o index
    exit;
}
?>