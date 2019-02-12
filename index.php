<?php
include("conexao.php");

$mesa = $_GET['mesa'];
$pedido = $_GET['pedido'];
$date = date('Y-m-d H:i');


 function adicionaproduto($conexao,$mesa,$pedido,$date) {
            $query = "insert into pedidos (nome, quantidade, mesa, dt_pedido) values ('{$pedido}',1,'{$mesa}', '{$date}')";
            return mysqli_query($conexao,$query);
			die;
        }
		
if ($mesa !=	"" or $pedido !=	"") {
	adicionaproduto($conexao,$mesa,$pedido,$date);
}
?>



<head>
  <title>Cozinha Só de Batata</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.orange-red.min.css" /> 
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.12.3.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script src="buscaAutomatica.js"></script>
  <link rel="stylesheet" type="text/css" href="cozinhapp.css">
</head>
 
<body class="mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-color--amber">
      <div class="mdl-layout__header-row">
        
        <span class="mdl-layout-title">Cozinha Só de Batata</span>
        
        <div class="mdl-layout-spacer"></div>
        
        
      </div>
    </header>

    <main class="mdl-layout__content" id="principal">
	
	<!-- Entrada da lista de pedidos -->
	
      <div class="page-content lista-pedidos">
		
      </div>
	  
	<!-- Fim da lista de pedidos -->

      
        <div class="page-content sem-pedidos-container">
          <div class="sem-pedidos">Sem pedidos agora!</div>
        </div>
      
    </main>
  </div>
</body>
 
<template name="pedido">
  <div class="mdl-card mdl-shadow--2dp pedido">
    <div class="mdl-card__title mdl-color--brown-500 mdl-color-text--white pedido-mesa">
      <h2 class="mdl-card__title-text">
        
      </h2>
    </div>

    <div class="mdl-card__supporting-text">
     

       <br><em></em> 
    </div>

    <div class="mdl-card__actions mdl-card--border">
      <button class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect delete"></button>
      <i class="pedido-data">às </i>
    </div>
  </div>
</template>