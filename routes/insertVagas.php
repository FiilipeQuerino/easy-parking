<?php
    include 'conexao.php';

    $nm_rua = $_POST['nr_vaga'];  
    $id_cidade = $_POST['qt_cidade']; 

    $sql = "INSERT INTO vaga (nr_vaga, qt_cidade) VALUES ('$nr_vaga', '$qt_cidade')";

    mysqli_query($conexao, $sql);
    
    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    header("location: ../src/vagas/index.php");