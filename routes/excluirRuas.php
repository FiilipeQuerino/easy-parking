<?php
include 'conexao.php';

$sql = "DELETE FROM rua WHERE id_rua = " . $_GET['id'];
// executada no BD

mysqli_query($conexao, $sql);

// Redirecionar para a lista
header("location: ../src/ruas/index.php");