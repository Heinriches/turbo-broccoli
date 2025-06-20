<?php 
$usuario = 'root';
$senha = '';
$banco = 'portalead';
$servidor = 'localhost';

$pdo = nwm PDO("mysql:dbname=$banco; host=$servidor", $usuario", $senha");
 ?>