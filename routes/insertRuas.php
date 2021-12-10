<?php
    include 'conexao.php';

    $nm_rua = $_POST['nm_rua'];  
    $id_cidade = $_POST['id_cidade']; 

    $sql = "INSERT INTO rua (nm_rua, id_cidade) VALUES ('$nm_rua', '$id_cidade') ";

    mysqli_query($conexao, $sql);
    
    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    header("location: ../src/ruas/index.php");