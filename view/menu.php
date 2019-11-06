
<?php include_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/18148.png" alt="" width="130px" height="100px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="inicio.php"><span></span> Inicio</a>
            </li>

            
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Gestão Produtos <span></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorias</a></li>
              <li><a href="produtos.php">Produtos</a></li>
            </ul>
          </li>


       


           <li><a href="clientes.php"><span></span> Clientes</a>
          </li>
          <li><a href="#"><span></span> Menu 3</a>
          </li>
          
          <li class="dropdown" >
            <a href="usuarios.php" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span></span>Usuário<span></span></a>
            <ul class="dropdown-menu">
              <?php if($_SESSION['usuario'] == "admin"):?>
            <li> <a  href="usuarios.php"><span></span>Gestão de Usuários</a></li>
              <?php endif; ?>
              <li> <a style="color: red" href="../procedimentos/sair.php"><span></span> Sair</a></li>
              
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
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').width(100);
      $('.logo').height(60);

    }
    else {
      $('.logo').height(100);
      $('.logo').width(150);
    }
  }
  );
</script>