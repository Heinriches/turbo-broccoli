<?php 
$usuario = 'root';
$senha = '';
$banco = 'portalead';
$servidor = 'localhost';

try {
	$pdo = new PDO("mysql:dbname=$banco; host=$servidor", "$usuario", "$senha");

} catch (Exception $e) {
	echo ('Erro ao conectar no Banco-de-Dados. <br> <br>' .$e);
	
}


 ?>	