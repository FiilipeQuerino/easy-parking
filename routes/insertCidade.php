<?php   
    include 'conexao.php';

    $nm_cidade = $_POST['nm_cidade'];
    $id_estado = $_POST['id_estado'];
    
    $sql = "INSERT INTO cidade (nm_cidade, id_estado) VALUES ('$nm_cidade','$id_estado')";
 
   mysqli_query($conexao, $sql);
   //se der erro ao cadastrar comente a linha a baixo
   header("location: ../src/cidades/index.php");