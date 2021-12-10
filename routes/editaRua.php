<?php
    include 'conexao.php';

    echo $id_rua = $_GET['id_rua'];
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
    <form method="post" action="modificaRua.php?id_rua=<?php echo $id_rua; ?>">
        <div class="column is-9">
            <label class="label" for="select">Cidade</label>
            <div class="select" style="margin-bottom: 30px;" id="select">
                <select name="id_cidade">

                    
                    <?php

                        $sql = mysqli_query($conexao,"SELECT a.id_rua, a.nm_rua, a.id_cidade, cid.nm_cidade 
                                        FROM rua a join cidade cid on (cid.id_cidade = a.id_cidade)
                                        WHERE a.id_rua = ".$id_rua
                                         );
                        
                        while ($linha = mysqli_fetch_array($sql)) {
                            echo "<option value=$linha[id_cidade]>";
                            echo $linha['nm_cidade'] ;
                            echo "</option>";

                            $nm_rua = $linha['nm_rua'];
                            
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <label id="id_rua" name="id_rua" value=<?php echo $id_rua; ?> > 6 </label>
                <label class="label">Rua <?php echo $id_rua; ?></label>
                <div class="control">
                    <input class="input" name="nm_rua" type="text" placeholder="Exemplo: Criciuma" style="width: 500px;" value=<?php echo $nm_rua; ?> >
                </div>
            </div>
        </div>
        <footer class="modal-card-foot">
            <button class="button is-success" type="submit" value="Cadastrar">Cadastrar</button>
            <button class="button" id="fechar-modal-cancelar" onclick="fecharModalEdicao()">Cancel</button>
        </footer>
    </form>
</section>