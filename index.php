<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

echo json_encode($usuarios);

//var_dump($usuarios);

 ?>