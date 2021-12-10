<?php
    include 'conexao.php';

    echo $id_cidade = $_GET['id_cidade'];
    //$nm_rua = $_POST['nm_rua'];  
    // id_cidade = $_POST['id_cidade']; 
    // $id_rua = $_GET['id_rua'];
    // $sql = mysqli_query($conexao,"SELECT a.id_rua, a.nm_rua, a.id_cidade, cid.nm_cidade as CIDADE
    //                                 FROM rua a join cidade cid on (cid.id_cidade = a.id_cidade)
    //                                 WHERE a.id_rua = ".$id_rua.";" );
    
    // while ($linha = mysqli_fetch_row($sql)) {

    //     echo $linha[3];
        
    // }
    //mysqli_query($conexao, $sql);
?>



<section class="modal-card-body" style="padding: 0;">
    <form method="post" action="modificaCidade.php?id_cidade=<?php echo $id_cidade; ?>">
        <div class="column is-9">
            <label class="label" for="select">Cidade</label>
            <div class="select" style="margin-bottom: 30px;" id="select">
                <select name="id_estado">
                 
                    <?php

                        $sql = mysqli_query($conexao,"SELECT id_estado, sigla FROM estado join cidade on (cidade.id_estado = estado.id_estado) WHERE a.id_rua = ".$id_estado
                                         );
                        
                        while ($linha = mysqli_fetch_array($sql)) {
                            echo "<option value=$linha[id_estado]>";
                            echo $linha['sigla'] ;
                            echo "</option>";

                            $id_cidade = $linha['id_cidade'];
                            
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <label id="id_cidade" name="id_cidade" value=<?php echo $id_cidade; ?> > 6 </label>
                <label class="label">Rua <?php echo $id_cidade; ?></label>
                <div class="control">
                    <input class="input" name="nm_rua" type="text" placeholder="Exemplo: Criciuma" style="width: 500px;" value=<?php echo $id_cidade; ?> >
                </div>
            </div>
        </div>
        <footer class="modal-card-foot">
            <button class="button is-success" type="submit" value="Cadastrar">Cadastrar</button>
            <button class="button" id="fechar-modal-cancelar" onclick="fecharModalEdicao()">Cancel</button>
        </footer>
    </form>
</section>