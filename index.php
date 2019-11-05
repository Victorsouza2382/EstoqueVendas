<?php
	require_once "classes/conexao.php";
	$obj = new conectar();
	$conexao = $obj->conexao();

	$sql = "SELECT * from usuarios where email='admin'";
	$result = mysqli_query($conexao, $sql);

	$validar = 0;
	if(mysqli_num_rows($result) > 0){
		$validar = 1;
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="js/funcoes.js"></script>
	<link rel="stylesheet" href="../EstoqueVendas/css/style.css">
</head>
<body>
	<div class="card" style="width: 18rem;">
        <div class="card-body">
<form id="frmLogin">
    <div class="form-group">
      <label for="exampleInputEmail1">User</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" placeholder="Password">
    </div>
   
    <button type="submit" id="entrarSistema" class="btn btn-primary">Entrar</button>
    <?php if(!$validar): ?>
							<a href="registrar.php" class="btn btn-danger btn-sm">Registrar</a>

							<?php 
								endif;
							 ?>
  </form>
  
  </div>
      </div>
  
 
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

		vazios=validarFormVazio('frmLogin');

			if(vazios > 0){
				alert("Preencha os campos!!");
				return false;
			}

		dados=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:dados,
			url:"procedimentos/login/login.php",
			success:function(r){
				//alert(r);
				if(r==1){
					window.location="view/inicio.php";
				}else{
					alert("Acesso Negado!!");
				}
			}
		});
	});
	});
</script>