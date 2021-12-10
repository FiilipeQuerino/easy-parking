<?php
    include 'conexao.php';

    $id_rua = $_GET['id_rua'];
    $nm_rua = $_POST['nm_rua'];  
    $id_cidade = $_POST['id_cidade']; 

    echo $id_rua." ".$nm_rua." ".$id_cidade; 

    // $sql = "UPDATE rua.id_rua, rua.nm_rua, rua.id_cidade, cid.nm_cidade FROM rua join cidade cid on (cid.id_cidade = rua.id_cidade) where rua.id_rua = ".$id_rua;

    // $sql = "UPDATE rua SET nm_rua = ".$nm_rua.", id_cidade = ".$id_cidade.";";
    echo $sql = "UPDATE rua SET nm_rua = '$nm_rua' where id_rua = $id_rua";
    
    mysqli_query($conexao, $sql);
    
    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    header("location: ../src/ruas/index.php");