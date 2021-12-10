<?php
    include 'conexao.php';

    $id_vaga = $_POST['id_vaga'];     
    $status = $_POST['status'];
    
    echo $sqlUpdate = "UPDATE vaga SET status = 'O' WHERE id_vaga = ".$id_vaga;   
    mysqli_query($conexao, $sqlUpdate);    

    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    $id_vaga = $_POST['id_vaga'];     
    header("location:/ ../src/visualizar_vagas/index.php");
?>   