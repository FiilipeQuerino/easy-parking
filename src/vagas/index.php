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
                        Administrador
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active" href="index.php">Vagas</a></li>
                        <li><a href="../ruas/index.php">Ruas</a></li>
                        <li><a href="../cidades/index.php">Cidades</a></li>
                    </ul>
                    <p class="menu-label">
                        Usuario
                    </p>
                    <ul class="menu-list">
                        <li><a href="../visualizar_vagas/index.php">Vagas</a></li>
                    </ul>

                </aside>
            </div>
            <div class="column is-9">
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="card events-card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Rua Henrique lage
                                </p>
                            </header>
                            <div class="card-table">
                                <div class="content">
                                    <table class="table is-striped">
                                        <tbody>
                                            <tr id="henriquelage1">
                                                <td width="5%"></td>
                                                <td>Vaga 1</td>
                                                <td class="level-right"><a class="button is-small is-primary" onclick="abrirModal()" href="#">Liberada</a></td>
                                            </tr>
                                            <tr id="henriquelage2">
                                                <td width="5%"></td>
                                                <td>Vaga 2</td>
                                                <td class="level-right"><a class="button is-small is-primary" onclick="abrirModal()" href="#">Liberada</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a href="#" class="card-footer-item">Adicionar vaga</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script async type="text/javascript" src="../js/bulma.js"></script>
        <script src="https://kit.fontawesome.com/44cff19db5.js" crossorigin="anonymous"></script>
</body>

</html>