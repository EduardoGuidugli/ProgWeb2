<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Magit</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/consulta.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Consulta Empresa</h3>
                    <h3 class="title has-text-grey">MAGIT</h3>
                            <div class="field">
                                <div class="control">
                                    <input name="empresa" name="text" class="input is-large" placeholder="Empresa" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="sistema" class="input is-large" type="password" placeholder="Sistema">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" name="text" class="input is-large" placeholder="Nome" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" name="text" class="input is-large" placeholder="CPF" autofocus="">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Consultar</button>
                            <h3 class="title has-text-grey"> </h3>
                            <button onclick="window.location.href='Decisao.php'" type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button>       
                                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>