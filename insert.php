<?php

//criação da query com INSERT
$query_insert = "INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);";

//Executamos a inserção em um if para que possamos saber se ela funcionou corretamente
if (mysqli_query($mysqli, $query_insert)) {
    echo "<script>alert('Cadastro realizado com sucesso !');</script>";
}else{
    echo "<script>alert('ERRO! Tente novamente');</script>";
}

?>
