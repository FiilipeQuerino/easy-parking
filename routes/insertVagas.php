<?php
    include 'conexao.php';

    //$nm_rua = $_POST['nr_vaga'];  
    //$id_cidade = $_POST['qt_cidade']; 
    $id_rua = $_POST['id_rua'];
    $id_cidade = $_POST['id_cidade'];
    $id_estado = $_POST['id_estado'];
 

    $sql = "INSERT INTO vaga (id_rua, id_cidade, id_estado) VALUES ('$id_rua', '$id_cidade', '$id_estado')";

    mysqli_query($conexao, $sql);
    
    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    header("location: ../src/vagas/index.php");