<?php
include 'conexao.php';
//cadastrar dados do form - post

$nome = $_POST['nome']; //recebe valor do atributo
$nota = $_POST['nota'];
$mes = $_POST['mes'];
$file = $_POST['file'];

echo $sql = "INSERT INTO `lutadores`( `nome`, `nota`, `mes`) VALUES ('$nome',$nota,'$mes')";

?>

        
