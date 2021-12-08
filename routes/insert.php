<?php   
    include 'conexao.php';

    $id_cidade = $_POST['id_cidade'];
    $nm_cidade = $_POST['nm_cidade'];
    
    $sql = "INSERT INTO cidade (id_cidade, nm_cidade) VALUES ('$id_cidade', '$nm_cidade')";
    
    mysqli_query($conexao, $sql);

    header("location: ../src/cidades/index.php");