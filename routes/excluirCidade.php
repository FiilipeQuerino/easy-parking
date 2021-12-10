<?php
include 'conexao.php';

$sql = "DELETE FROM cidade WHERE id_cidade = " . $_GET['id'];
// executada no BD

mysqli_query($conexao, $sql);

// Redirecionar para a lista
header("location: ../src/cidades/index.php");