<?php
include_once "classes/conexao.php";
$obj = new conectar();
$conexao = $obj->conexao();

$sql = "SELECT * from usuarios where email='admin'";
$result = mysqli_query($conexao, $sql);

$validar = 0;
if (mysqli_num_rows($result) > 0) {
    $validar = 1;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
    <script src="style/jquery-3.2.1.min.js"></script>
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="../EstoqueVendas/css/style.css">
</head>
<body style="background-color: gray">
<br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
        <di class="col-sm-4"></di>
        <div class="col-sm-4">
            <center>
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Fazer Login</div>
                    <div class="panel panel-body">
                        <form id="frmLogin">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       aria-describedby="emailHelp"
                                       placeholder="Usuário">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                            </div>

                            <button type="submit" id="entrarSistema" class="btn btn-success">Entrar</button>
                            <?php if (!$validar): ?>
                                <a href="registrar.php" class="btn btn-primary btn-sm">Registrar</a>

                            <?php
                            endif;
                            ?>
                        </form>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>


</body>
</html>


<script type="text/javascript">
    $(document).ready(function () {
        $('#entrarSistema').click(function () {

            vazios = validarFormVazio('frmLogin');

            if (vazios > 0) {
                alert("Preencha os campos!!");
                return false;
            }

            dados = $('#frmLogin').serialize();
            $.ajax({
                type: "POST",
                data: dados,
                url: "procedimentos/login/login.php",
                success: function (r) {
                    //alert(r);
                    if (r == 1) {
                        window.location = "view/inicio.php";
                    } else {
                        alert("Acesso Negado!!");
                    }
                }
            });
        });
    });
</script>