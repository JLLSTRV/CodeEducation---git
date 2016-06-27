		<section id="lista-de-clientes" class="container">
			<h2 class="titulo-principal" >Listagem de Clientes</h2>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<table>
						<tr class="panel-title">
							<td>
								<form action="index.php" method="post">
									<input type="submit" name="campo" value="nome"/>
									<?php if ($ordnome === "a") {?>
										<span class="glyphicon glyphicon-triangle-top"></span>
									<?php } ?>
									<?php if ($ordnome === "d") {?>
										<span class="glyphicon glyphicon-triangle-bottom"></span>
									<?php } ?>
									<input type="hidden" name="ordem" value="<?=$ordnome?>"/>
								</form>
							</td>
							<td>
								<form action="index.php" method="post">
									<input type="submit" name="campo" value="cpf"/>
									<?php if ($ordcpf === "a") {?>
										<span class="glyphicon glyphicon-triangle-top"></span>
									<?php } ?>
									<?php if ($ordcpf === "d") {?>
										<span class="glyphicon glyphicon-triangle-bottom"></span>
									<?php } ?>
									<input type="hidden" name="ordem" value="<?=$ordcpf?>"/>
								</form>
							</td>
						</tr>
						</table>
				</div>
			
				<div class="panel-body corpo-lista">
					<div class="panel-group" id="lista-clientes">
						<?php foreach ($arrayClientes as $cliente):	?> 
							<div class="panel panel-default painel-cliente">
								<div>
									<table>
									<tr  role="button" data-parent="#lista-clientes" data-toggle="collapse" data-target="<?="#detalhe" . $cliente->id?>">
									<td><?=$cliente->nome?></td>
									<td><?=$cliente->cpf?></td>
									</tr>
									</table>
								</div>
								<div class="collapse" id="<?="detalhe" . $cliente->id?>">
									<div class="panel-body">
										<p><b>Nome:</b>  <?=$cliente->nome?></p>
										<p><b>Cpf:</b> <?=$cliente->cpf?></p>
										<p><b>Endereço:</b>  <?=$cliente->endereco?></p>
										<p><b>Telefone:</b> <?=$cliente->telefone?></p>
										<p><b>Email:</b> <?=$cliente->email?></p>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</section>
