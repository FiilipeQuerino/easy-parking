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
                        <li><a class="is-active" href="index.php">Vagas</a></li>
                        <li><a href="../ruas/index.php">Ruas</a></li>
                        <li><a href="../cidades/index.php">Cidades</a></li>
                    </ul>

                </aside>
            </div>
            <div class="column is-9">
                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Ola, seja bem-vindo.
                            </h1>
                            <h2 class="subtitle">
                                Aqui abaixo estão as ruas com suas respectivas vagas
                            </h2>
                        </div>
                    </div>
                </section>
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="card events-card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Rua Henrique lage
                                </p>
                                <a href="#" class="card-header-icon" aria-label="more options">
                                    <span class="icon">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </header>
                            <div class="card-table">
                                <div class="content">
                                    <table class="table is-striped">
                                        <tbody>
                                            <tr id="henriquelage1">
                                                <td width="5%"></td>
                                                <td>Vaga 1</td>
                                                <td class="level-right"><a class="button is-small is-primary" href="#">Liberada</a></td>
                                            </tr>
                                            <tr id="henriquelage2">
                                                <td width="5%"></td>
                                                <td>Vaga 2</td>
                                                <td class="level-right"><a class="button is-small is-primary" href="#">Liberada</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a href="#" id="modal-cadastrar-vaga" class="card-footer-item">Adicionar vaga</a>
                                <div class="modal" id="modal">
                                    <div class="modal-background"></div>
                                    <div class="modal-content">
                                        <header class="modal-card-head">
                                            <p class="modal-card-title">Cadastro de vaga</p>
                                            <button class="delete" aria-label="close" id="fechar-modal"></button>
                                        </header>
                                        <section class="modal-card-body">
                                            
                                        <div class="field">
                                            <label class="label">CPF</label>
                                            <div class="control">
                                                <div>
                                                    <input class="input" type="text" style="width: 500px;">
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <footer class="modal-card-foot">
                                            <button class="button is-success">Save changes</button>
                                            <button class="button" id="fechar-modal-cancelar">Cancel</button>
                                        </footer>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var elemento = document.getElementById('modal-cadastrar-vaga').addEventListener('mousedown', () => {
                var elemento2 = document.getElementById('modal').classList.add('is-active')
            })

            var fechar = document.getElementById('fechar-modal').addEventListener('mousedown', () => {
                var elemento2 = document.getElementById('modal').classList.remove('is-active')
            })

            var fecharmodal = document.getElementById('fechar-modal-cancelar').addEventListener('mousedown', () => {
                var elemento2 = document.getElementById('modal').classList.remove('is-active')
            })
        </script>
        <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>