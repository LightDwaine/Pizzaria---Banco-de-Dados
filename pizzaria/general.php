<?php
  include_once("templates/header.php");
  include_once("process/menu.php");
?>
  <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
							<h2>Bordas</h2>
						</div>
						<table class="table">
					    <tr>
					        <th>ID</th>
					        <th>Tipo</th>
					    </tr>
					    <?php foreach ($bordas as $borda) { ?>
					        <tr>
					            <td><?php echo $borda['id']; ?></td>
					            <td>
					                <form method="post" action="general.php">
					                    <input type="hidden" name="borda_id" value="<?php echo $borda['id']; ?>">
					                    <input type="text" name="borda_tipo" value="<?php echo $borda['tipo']; ?>">
					                    <button type="submit" name="update_borda" class="update-btn update">
					                    <i class="fas fa-sync-alt"></i></button>
					                    <button type="submit" name="delete_borda" class="delete-btn update"><i class="fas fa-times"></i></button>
					                </form>
					            </td>
					        </tr>
					    <?php } ?>
						</table>
						<div class="insert-general">
							<h2>Inserir nova Borda</h2>
							<form method="post" action="general.php">
							    <input type="text" name="borda_tipo" placeholder="Tipo da Borda" required>
							    <button type="submit" name="add_borda">Inserir Borda</button>
							</form>
						</div>
					</div>
					<div class="table-general">
						<h2>Massas</h2>
						<table class="table">
					    <tr>
					        <th>ID</th>
					        <th>Tipo</th>
					    </tr>
					    <?php foreach ($massas as $massa) { ?>
					        <tr>
					            <td><?php echo $massa['id']; ?></td>
					            <td>
					                <form method="post" action="general.php">
					                    <input type="hidden" name="massa_id" value="<?php echo $massa['id']; ?>">
					                    <input type="text" name="massa_tipo" value="<?php echo $massa['tipo']; ?>">
					                    <button type="submit" name="update_massa" class="update-btn">
					                    <i class="fas fa-sync-alt"></i></button>
					                    <button type="submit" name="delete_massa" class="delete-btn"><i class="fas fa-times"></i></button>
					                </form>
					            </td>
					        </tr>
					    <?php } ?>
					</table>
					<div class="insert-general">
						<h2>Inserir nova Massa</h2>
						<form method="post" action="general.php">
						    <input type="text" name="massa_tipo" placeholder="Tipo da Massa" required>
						    <button type="submit" name="add_massa">Inserir Massa</button>
						</form>
						</div>
				</div>
				<div class="table-general">
					<h2>Sabores</h2>
					<table class="table">
					    <tr>
					        <th>ID</th>
					        <th>Nome</th>
					    </tr>
					    <?php foreach ($sabores as $sabor) { ?>
					        <tr>
					            <td><?php echo $sabor['id']; ?></td>
					            <td>
					                <form method="post" action="general.php">
					                    <input type="hidden" name="sabor_id" value="<?php echo $sabor['id']; ?>">
					                    <input type="text" name="sabor_nome" value="<?php echo $sabor['nome']; ?>">
					                    <button type="submit" name="update_sabor" class="update-btn">
					                    <i class="fas fa-sync-alt"></i></button>
					                    <button type="submit" name="delete_sabor" class="delete-btn"><i class="fas fa-times"></i></button>
					                </form>
					            </td>
					        </tr>
					    <?php } ?>
					</table>
					<div class="insert-general">
						<h2>Inserir novo Sabor</h2>
						<form method="post" action="general.php">
						    <input type="text" name="sabor_nome" placeholder="Nome do Sabor" required>
						    <button type="submit" name="add_sabor">Inserir Sabor</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include_once("templates/footer.php");
?>