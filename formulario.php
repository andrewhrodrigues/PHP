<?php

if(isset($_POST['submit'])){

include('conexao.php');

$nome = $_POST['nome'];
$apresentacao = $_POST['apresentacao'];
$natureza = $_POST['natureza'];
$arquivo = $_POST['arquivo'];

$result = mysqli_query($mysqli,"INSERT INTO marca(nome, apresentacao, natureza, arquivo) VALUES ($nome', '$apresentacao', '$natureza', '$arquivo')");

}
?>
