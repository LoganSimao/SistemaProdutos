<?php 
	include_once 'php_action/conexao.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($con, $_GET['id']);

		$sql = "SELECT * FROM produtos WHERE ID = '$id'";

		$resultado = mysqli_query($con,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Dados do Produto</h3>
			
			<form action="php_action/alterar_produtos.php" method="POST">

				<input type="hidden" name = "idproduto" value="<?php echo $dados['ID']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="produto" id="produto" 
					value="<?php echo $dados['produto']; ?>">
					<label for="produto">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
					<label for="descricao">Descrição</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca" value="<?php echo $dados['marca']; ?>">
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco" value="<?php echo $dados['preco']; ?>">
					<label for="preco">Preço</label>
				</div>

				<button type="submit" name="alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>