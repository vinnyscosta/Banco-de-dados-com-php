<?php

//criação da query com SELECT
$query_select = "SELECT * FROM table_name";

//Resultado do select é adicionado a uma váriavel, aqui utilizamos a variavel de conexão com o banco e a que possui a query
$resultado_select = mysqli_query($mysqli,$query_select);

//Verificamos se houve resultados
//se não, imprimimos a mensagem com o erro na tela
if (!$resultado_select) {
	$message  = 'Invalid query: ' . mysql_error() . "\n";
	$message .= 'Whole query: ' . $query;
	echo "erro";
	die($message);
}else{
    //se sim, transformamos o resultado em um array para que possamos usá-lo com um while em alguma variavel
	while ($row = mysqli_fetch_array($resultado_select)) {
		//aqui usamos a variavel escolhida para nos referenciarmos ao item resultado do SELECT
        echo $row[1];
	echo $row[2];
	}
    //liberamos os resultados obtidos
    mysqli_free_result($resultado_select);
}

?>
