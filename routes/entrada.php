<?php
    include 'conexao.php';

    $id_rua = $_POST['id_rua'];
    $id_vaga = $_POST['id_vaga'];     
    $hora_entrada = $_POST['hora_entrada']; 
    $horario_saida = $_POST['horario_saida'];
    $cpf = $_POST['cpf'];
    $status = $_POST['status'];

    echo $sql = "INSERT INTO movimentacao (id_rua, id_vaga, horar_entrada, horario_saida, cpf) VALUES ($id_rua, $id_vaga, NOW(), NULL, '$cpf') ";   

    mysqli_query($conexao, $sql);

    //MATEUS QUE COLOCA AS ROTAS NA LINHA A BAIXO 
    $id_vaga = $_POST['id_vaga'];     
    header("location:/ ../src/visualizar_vagas/index.php");
?>   