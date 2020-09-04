<h1>Lista de nomes</h1>

<?php
$titles = file_get_contents('note.txt'); // ler arquivo
$titles = explode("\n", $titles); // quebrar texto por linhas
$titles = implode(' ', $titles); // transformando em string
echo $titles;
?>