<?php
    include 'conexao.php';

    //$nm_rua = $_POST['nr_vaga'];  
    //$id_cidade = $_POST['qt_cidade']; 
    $id_cidade = $_POST['id_cidade'];
    $id_estado = $_POST['id_estado'];
    $id_rua = $_POST['id_rua'];

    $sql = "INSERT INTO vaga (id_cidade, id_estado, id_rua) VALUES ('$id_cidade', '$id_estado', '$id_rua')";

    mysqli_query($conexao, $sql);
    
    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    header("location: ../src/vagas/index.php");