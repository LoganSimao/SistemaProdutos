<?php 

	include_once 'php_action/conexao.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>
<!-- Create database produtos;
	create table produtos(
		ID INT not null auto_increment,
		produto varchar(30),
		descricao varchar(70),
		marca varchar(20),
		preco float,
		primary key(ID),
		unique(ID)
	); -->

	<div class="row">

		<div class="col s12 m6 push-m3">
			<h3 class="light">Produtos</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Produto</th>
					<th>Descrição</th>
					<th>Marca</th>
					<th>Preço</th>
				</tr>				
			</thead>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM produtos";

					$resultado = mysqli_query($con, $sql);

						
					while($data = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $data['ID']; ?></td>
							<td><?php echo $data['produto']; ?></td>
							<td><?php echo $data['descricao']; ?></td>
							<td><?php echo $data['marca']; ?></td>
							<td><?php echo 'R$ ',$data['preco']; ?></td>

							<td><a href="alterar.php?id=<?php echo $data['ID']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $data['ID']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $data['ID']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o Produto?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_produto.php" method="POST">
							      	<input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">

							      	<button type="submit" name="excluir" class="btn red">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<a href="cadastrar.php" class="btn">Adicionar Produto</a>
		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>