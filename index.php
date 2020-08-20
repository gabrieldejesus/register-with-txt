<span>Novo Nome:</span><br>

<form method="POST" action="recebedor.php">
    <input type="text" name="nome" autofocus>
    <input type="submit" value="Adicionar">
</form>

<h1>Lista de nomes</h1>

<?php
$nomes = file_get_contents('nomes.txt'); // ler arquivo
$nomes = explode("\n", $nomes); // quebrar texto por linhas
$nomes = implode(' ', $nomes); // transformando em string
echo $nomes;
?>