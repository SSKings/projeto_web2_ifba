<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Usuário</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crie uma Conta!</h1>
                            </div>
                            <form class="user" action="_cadastro.php" method="post" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="nome" name="nome" placeholder="Nome" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           id="senha" name="senha" placeholder="Senha" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="senha_confirmacao" name="senha_confirmacao"  placeholder="Repetir Senha" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" 
                                    value="Registrar conta">
                                          
                            </form>
                            <?php
                                if (isset($_GET['erro'])) {
                                    $erro = $_GET['erro'];
                                    echo '<div class="alert alert-danger">' . htmlspecialchars($erro) . '</div>';
                                }else if(isset($_GET['sucesso'])){
                                    $sucesso = $_GET['sucesso'];
                                    echo '<div class="alert alert-success">' . htmlspecialchars($sucesso) . '</div>';
                                }
                            ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Recuperar senha?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Já tem uma conta? faça Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>