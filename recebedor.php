<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // pegando nome digitado e validando

// verificar se nome está preenchido
if($nome) {
    $nomes = file_get_contents('nomes.txt'); // ler o texto
    $nomes .= "\n<li>$nome</li>"; // adicionar nova linha
    file_put_contents('nomes.txt', $nomes); // adicionar o contéudo novo

    header("Location: index.php"); // depois de adicionar enviar para o index;
    exit;
} else {
    header("Location: index.php"); // se não tiver preenchido ele volta para o index
    exit;
}
?>