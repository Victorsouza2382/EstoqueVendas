<?php
session_start();
if (isset($_SESSION['usuario'])) {


    ?>




    <!DOCTYPE html>
    <html>
    <head>
        <title>Início</title>
        <?php include_once "menu.php" ?>
        <link rel="stylesheet" href="../EstoqueVendas/css/style.css">

    </head>
    <body>
    <div id="myInfo1">
        
    </div>

    <div id="vendasFeitas">
           <script type="text/javascript">
		$(document).ready(function(){

				
				$('#vendasFeitas').load('vendas/vendasRelatorios.php');
				
				$('#vendasFeitas').show();
				
		});

		

	</script>
    </div>

    

    </body>
    </html>


    <?php
} else {
    header("location:../index.php");
}

?>

