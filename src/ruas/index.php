<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
    <div class="container" style="margin-top:40px ;">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="../vagas/index.php">Vagas</a></li>
                        <li><a class="is-active" href="index.php">Ruas</a></li>
                        <li><a href="../cidades/index.php">Cidades</a></li>
                    </ul>
                </aside>
            </div>

            <table class="table is-fullwidth">
                <thead style="font-size: 18;">
                    <th>Id</th>
                    <th>Rua</th>
                    <th>Cidade</th>
                    <th style="text-align: right;"> <button class="button is-success" onclick="abrirModal('cadastro')" id="modal-cadastrar-vaga">+ Cadastrar</button></th>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>henrique lage</td>
                    <td>criciuma</td>
                    <td style="text-align:right ;"><a style="color: black;"><i id="abrir-modal-editar" onclick="abrirModal('edicao')" class="fas fa-pencil-alt" style="margin-right: 18px;"></i></a><i class="fas fa-trash-alt"></i></td>
                </tbody>
            </table>
            <div class="modal" id="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <header class="modal-card-head">
                        <p id="titulo-modal" class="modal-card-title">Cadastro de ruas</p>
                        <button class="delete" aria-label="close" id="fechar-modal" onclick="fecharModal()"></button>
                    </header>
                    <section class="modal-card-body" style="padding: 0;">
                        <form method="post" action="../../routes/insert.php">
                            <div class="column is-9">
                                <label class="label" for="select">Cidade</label>
                                <div class="select" style="margin-bottom: 30px;" id="select">
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label class="label">Rua</label>
                                    <div class="control">
                                        <input class="input" name="nm_rua" type="text" placeholder="Exemplo: Criciuma" style="width: 500px;">
                                    </div>
                                </div>
                            </div>
                            <footer class="modal-card-foot">
                                <button class="button is-success" type="submit" value="Cadastrar">Cadastrar</button>
                                <button class="button" id="fechar-modal-cancelar" onclick="fecharModal()">Cancel</button>
                            </footer>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script src="./js/ruasController.js"></script>
        <script async type="text/javascript" src="../js/bulma.js"></script>
        <script src="https://kit.fontawesome.com/44cff19db5.js" crossorigin="anonymous"></script>
</body>

</html>