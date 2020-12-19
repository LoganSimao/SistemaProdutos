<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Produto</h3>
			
			<form action="php_action/cadastrar_produto.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="produto" id="produto">
					<label for="produto">Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao">
					<label for="descricao">Descrição</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca">
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco">
					<label for="preco">Preço</label>
				</div>

				<button type="submit" name="cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>