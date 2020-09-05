<?php
include "funcoes.php";

$hoje = dataCompletaExtenso();
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <title>Clientes&amp;Contatos</title>
</head>

<body>
    <!-- card de login -->
    <div class="col-md-6">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title text-center mb-4 mt-1">Login de acesso</h4>
                        <hr>
                        <p class="text-secondary text-center"><?php echo $hoje; ?></p>
                        <form action="entrar.php" method="post">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="Usuário" type="text" id="fUsuario" name="fUsuario">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="******" type="password" id="fSenha" name="fSenha">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block" id="btnEntrar" name="btnEntrar"> Entrar </button>
                                    </div> <!-- form-group// -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="reset" class="btn btn-primary btn-block"> Limpar </button>
                                    </div> <!-- form-group// -->
                                </div>
                            </div>
                        
                        </form>
                        <div>
                        
                    </article>
                </div> <!-- card.// -->

                </aside> <!-- col.// -->
            </div> <!-- row.// -->

        </div>
    </div>
    <!--container end.//-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>