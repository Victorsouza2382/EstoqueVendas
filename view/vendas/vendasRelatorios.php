<?php

include_once "../../classes/conexao.php";
include_once "../../classes/vendas.php";
$c = new conectar();
$conexao = $c->conexao();

$obj = new vendas();

$sql = "SELECT id_venda,
				dataCompra,
				id_cliente 
			from vendas group by id_venda";
$result = mysqli_query($conexao, $sql);
?>


<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
                <caption><label>Vendas</label></caption>
                <tr>
                    <td>Código</td>
                    <td>Data</td>
                    <td>Cliente</td>
                    <td>Total da Compra</td>
                    <td>Comprovante</td>
                </tr>
                <?php while ($ver = mysqli_fetch_row($result)): ?>
                    <tr>
                        <td><?php echo $ver[0] ?></td>
                        <td><?php echo date("d/m/Y", strtotime($ver[1])) ?></td>
                        <td>
                            <?php
                            if ($obj->nomeCliente($ver[2]) == " ") {
                                echo "S/C";
                            } else {
                                echo $obj->nomeCliente($ver[2]);
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            echo "R$ " . $obj->obterTotal($ver[0]) . ",00";
                            ?>
                        </td>
                        <td>
                            <a href="../procedimentos/vendas/criarComprovantePdf.php?idvenda=<?php echo $ver[0] ?>"
                               class="btn btn-success btn-sm">
                                Comprovante <span class="glyphicon glyphicon-list-alt"></span>
                            </a>
                        </td>
                        
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>