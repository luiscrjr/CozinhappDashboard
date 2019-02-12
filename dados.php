<?php
    

    
    include_once './conexao.php';
    
    $sql = "select * from pedidos order by dt_pedido asc";
    
    
    $result = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            ?>
			
			<div class="page-content lista-pedidos">
            <div class="mdl-card mdl-shadow--2dp pedido">
					<div class="mdl-card__title mdl-color--brown-500 mdl-color-text--white pedido-mesa">
						<h2 class="mdl-card__title-text">
							Mesa: <?php echo $row["mesa"];?>
						</h2>
					</div>
					<div class="mdl-card__supporting-text">
							<?php echo $row["nome"];?>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<button class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect delete" onclick='deletaPedido(<?php echo $row["id"];?>)'>Finalizar</button>
						<i class="pedido-data">em: <?php echo $row["dt_pedido"];?> </i>
					</div>
					
					</div>
			  </div>	

				
            <?php
        } 
    }else{
        echo "<div class='page-content sem-pedidos-container'>
				<div class='sem-pedidos'>Sem pedidos agora!</div>
			</div>";
    }
    mysqli_close($conexao);
    
    

?>
