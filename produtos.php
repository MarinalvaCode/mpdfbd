<?php
$produtos = [
   [
    'nome' => 'Blusa basica',
    'categoria' => 'vestimenta',
    'preco' => '25.90',
    'descricao' => 'Blusa de malha confortável, ideal para o dia a dia, com estilo casual'
],
[
    'nome' => 'Vestido Floral',
    'categoria' => 'vestimenta',
    'preco' => '20.90',
    'descricao' => 'Vestido floral feminino, leve e fresco'
],
[
    'nome' => 'Jaqueta de Couro',
    'categoria' => 'vestimenta',
    'preco' => '30.70',
    'descricao' => 'Jaqueta de couro, ideal para looks ousados'
],
[
    'nome' => 'Calça Jeans',
    'categoria' => 'vestimenta',
    'preco' => '55.90',
    'descricao' => 'Calça jeans, confortável, combina com qualquer look do dia a dia'
],
[
    'nome' => 'Camisa Social',
    'categoria' => 'vestimenta',
    'preco' => '45.90',
    'descricao' => 'Camisa social, elegante, para um visual profissional e moderno'
]

];
 
require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
 
$html = '
<h1>Relatório de Produtos</h1>
<p>Data de geração: 31/10/24 </p>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';
 
foreach ($produtos as $produto) {
    $html .= '
        <tr>
            <td>' . $produto['nome'] . '</td>
            <td>' . $produto['categoria'] . '</td>
            <td>' . $produto['preco'] . '</td>
            <td>' . $produto['descricao'] . '</td>
        </tr>';
}
// Fecha a tabela e finaliza o HTML
$html .= '</tbody></table>';
 
 
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>