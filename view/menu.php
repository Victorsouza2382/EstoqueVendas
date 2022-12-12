<?php include_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/778c80b037.js" crossorigin="anonymous"></script>
</head>
<body>


<div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
        <div class="container">
            <div class="navbar-header">
              
                <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/Puc.jpg" alt="" width="200px" height="150px"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="inicio.php"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    </li>


                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><span></span> Gestão Produtos <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="categorias.php">Categorias</a></li>
                            <li><a href="produtos.php">Produtos</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><span></span> Pessoas <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="clientes.php">Clientes</a></li>
                            <?php if ($_SESSION['usuario'] == "admin"): ?>
                                <li><a href="fornecedores.php">Fornecedores</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li>
                        <a href="vendas.php"><span class=""></span>Vendas <i class="fa fa-usd" aria-hidden="true"></i> </a>
                    </li>

                    <li class="dropdown">
                        <a href="usuarios.php" style="color: deepskyblue" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true"
                           aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i> Usuário </a>
                        <ul class="dropdown-menu">
                            <?php if ($_SESSION['usuario'] == "admin"): ?>
                                <li><a href="usuarios.php"><span></span>Gestão de Usuários</a></li>
                            <?php endif; ?>
                            <li><a style="color: red" href="../procedimentos/sair.php"><span></span> Sair</a></li>

                        </ul>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>


</body>
</html>

<script type="text/javascript">
    $(window).scroll(function () {
            if ($(document).scrollTop() > 150) {
                $('.logo').width(100);
                $('.logo').height(60);

            } else {
                $('.logo').height(100);
                $('.logo').width(150);
            }
        }
    );
</script>