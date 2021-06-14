<?php
    //Criação da conexão
	$mysqli = new mysqli('ServerName','User','Password','NameDataBase');
	mysqli_set_charset($mysqli, "utf8");
	
    //Confirma a conexão
	if (mysqli_connect_error()) {
		echo "ERRO DE CONEXÃO !";
		die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>
