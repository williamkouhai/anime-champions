<?php
session_start();//CONTROLE DE SESSÃO PRA VER SE ESTÁ LOGADO
include 'conexao.php';

//Campos do html de login

$email=$_POST['email'];
$senha=$_POST['senha'];


if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: login.html');
}

//conexao com banco
$conexao = new mysqli($servhost, $username, $password, $database);
$sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";

//Conexão com banco e inserção de dados
$resultado = $conexao->query($sql);//novo inserir
//retorna o resultado caso for TRUE
if($resultado->num_rows>0){
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	header('location:index.php');
 }
 else {
 	session_unset();
 	session_destroy();
 	echo "<script>alert('Login ou Senha incorretos, tente novamente')
 	window.location.href='login.html'</script>
 	";
 }

?>