<?php   
    include 'conexao.php';

    $nm_cidade = $_POST['nm_cidade'];
    
    $sql = "INSERT INTO cidade (nm_cidade) VALUES ('$nm_cidade')";
    
    mysqli_query($conexao, $sql);
    //se der erro ao cadastrae comente a linha a baixo
   header("location: ../src/cidades/index.php");