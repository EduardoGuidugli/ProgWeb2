<?php
define('DB_HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(DB_HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>