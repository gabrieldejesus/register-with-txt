<?php
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS); // pegando o titulo digitado e validando
<<<<<<< HEAD
$text = filter_input(INPUT_POST, 'text'); // pegando o texto digitado

// verificar se title está preenchido
if($title) {
    $contents = file_get_contents('note.txt'); // ler o texto
    $contents .= "<h1>$title</h1> \n<span>$text</span>"; // adicionar titulo e texto
    file_put_contents('note.txt', $contents); // adicionar o contéudo novo
=======

// verificar se title está preenchido
if($title) {
    $titles = file_get_contents('note.txt'); // ler o texto
    $titles .= "\n<li>$title</li>"; // adicionar nova linha
    file_put_contents('note.txt', $titles); // adicionar o contéudo novo
>>>>>>> c2624cf3f08ec43e111fad914944b5361ebe88a4

    header("Location: note.php"); // depois de adicionar envia para a página note;
    exit;
} else {
    header("Location: index.php"); // se não tiver preenchido ele volta para o index
    exit;
}
?>