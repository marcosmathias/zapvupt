<?php

include 'db.inc';

$codigo				= $_POST['Codigo'];
$imagem				= $_POST['Imagem'];
$marca				= $_POST['Marca'];
$unidade_medida		= $_POST['Unidade_de_medida'];
$medicao			= $_POST['Medicao'];
$tipo				= $_POST['Tipo'];
$nome_exibicao		= $_POST['Nome_Fantasia'];
$preco				= $_POST['Preco'];
$promocao_flag		= $_POST['Promocao_Disponivel'];
$preco_promocao		= $_POST['Preco_Promocao'];
$quantidade			= $_POST['Quantidade_Disponivel'];
$validade_promocao	= $_POST['Validade_Promocao'];

$sql = "INSERT INTO produto VALUES";
$sql .= "('$codigo', '$imagem', '$marca', '$cidade', '$estado', '$comentarios')";

if ($conexao->query($sql) == TRUE) {
	echo "Cadastro de produto realizado com sucesso."
}

?>