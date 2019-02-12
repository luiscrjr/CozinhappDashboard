<?php
    
	$nome = $_POST["id"];
    
    include_once './conexao.php';
    
    $sql = "delete from pedidos where id = {$nome}";
    
    
    $result = mysqli_query($conexao, $sql);