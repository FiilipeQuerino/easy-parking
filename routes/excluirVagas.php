<?php
include 'conexao.php';

$sql = "DELETE FROM vaga WHERE id_vaga = " . $_GET['id'];
// executada no BD

mysqli_query($conexao, $sql);

// Redirecionar para a lista
header("location: ../src/vagas/index.php");