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
                        <li><a href="../ruas/index.php">Ruas</a></li>
                        <li><a class="is-active" href="index.php">Cidades</a></li>
                    </ul>
                </aside>
            </div>
            <button class="button is-success" id="modal-cadastrar-vaga">+ Cadastrar</button>
            <div class="modal" id="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Cadastro de cidades</p>
                        <button class="delete" aria-label="close" id="fechar-modal"></button>
                    </header>
                    <section class="modal-card-body">
                        <form method="post" action="../../routes/insert.php">
                            <div class="column is-9">
                                <div class="field">
                                    <label class="label">Cidade</label>
                                    <div class="control">
                                        <input class="input" name="nm_cidade" type="text" placeholder="Exemplo: Criciuma" style="width: 500px;">
                                    </div>
                                </div>
                            </div>
                            <div class="select">
                                <select>
                                    <option>SC</option>
                                    <option></option>
                                </select>
                            </div>
                        </form>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" type="submit" value="Cadastrar">Cadastrar</button>
                        <button class="button" id="fechar-modal-cancelar">Cancel</button>
                    </footer>
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
        <script src="https://kit.fontawesome.com/44cff19db5.js" crossorigin="anonymous"></script>
</body>

</html>