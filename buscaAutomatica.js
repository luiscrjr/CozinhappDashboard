$(document).ready(function (){
                   //alert('ok');
                   var i = 0;
                   var vnome = 'teste'; //guardando na variavel vnome o valor do id nome
                   //alert(vnome);
                   
                   //passar o valor do vnome para o arquivo que vai ao banco
                   //url, dados, função de retorno
				   
				   $(function() {
					//	startRefresh();
					});
					
					function fn60sec() {
						// runs every 60 sec and runs on init.
						$.post("dados.php",
                         {nome:vnome},
                         function(saida){
							 console.log(saida.data);
                            $("#principal").empty().html(saida);
                         });
					}
				   
				   fn60sec();
					// setInterval(fn60sec, 1*1000);
                   
                   
});

function deletaPedido(id) {
	var id = id;
	
	$.post("deleta.php",
		 {id:id},
		 function(saida){
			$("#principal").empty().html(saida);
	 });

	
}
       