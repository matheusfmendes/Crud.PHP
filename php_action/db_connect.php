<?php

$servername = "localhost";
$username = "root";
$senha = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $senha, $db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()){
	echo "Falha na conexao:".mysqli_connect_error();
}