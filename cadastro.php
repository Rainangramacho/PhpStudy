<html>
<meta charset="utf-8"/>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Cadastre-se!</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="insert_sqlserv.php" method="post">
                            <h3 class="text-center text-info">Cadastro</h3>
                            <div class="form-group">
                                <label for="nome" class="text-info">Nome</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me  </span><input id="remember-me" name="remember-me" type="checkbox"></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Já tem conta? Faça Login!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
