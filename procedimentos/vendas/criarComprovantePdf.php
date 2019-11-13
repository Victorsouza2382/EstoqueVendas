<?php

include_once '../../style/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$id = $_GET['idvenda'];

function file_get_contents_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $dados = curl_exec($ch);
    curl_close($ch);
    return $dados;

}

$html = file_get_contents("http://localhost/EstoqueVendas/view/vendas/comprovanteVendaPdf.php?idvenda=" . $id);


// Instanciando um objeto da classe DOMPDF.
$pdf = new DOMPDF();

// Definindo o tamanho do papel e orientação.
$pdf->set_paper(array(0, 0, 130, 400));

// Carregar o conteúdo html.
$pdf->load_html(utf8_decode($html));

// Renderizar PDF.
$pdf->render();

// Enviamos pdf para navegador.
$pdf->stream('relatorioVenda.pdf');



