<div class='errors'> <?php echo error(validation_errors()); ?> </div>
<?php include("public/js/keyboard.php");
global $config;
?>
<script>
	function createAccount() {
		$('.loader').show();
		var form = $('#createAccount').serialize();
		$.ajax({
			url: '<?php echo WEBSITE; ?>/index.php/account/create/1',
			  type: 'post',
			  data: form,
			  success: function(data) {
			  	$('.errors').html(data);
			  	$('.loader').hide();
			  }
		});
	}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE; ?>/public/css/keyboard.css">
<div class='message'>
	<div class='title'>Criação de conta</div>
	<div class='content'> <?php echo form_open('account/create', array('id'=>'createAccount')); ?>
			<!-- Tabela da conta -->
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Informações de conta</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label for="name">Nome da conta:</label></td>
						<td><input type="text" value="<?php echo set_value('name'); ?>" id="name" class="keyboardInput" name="name"/></td>
					</tr>
					<tr>
						<td><label for="nickname">Apelido:</label></td>
						<td><input type='text' name='nickname' id="nickname" value='<?php echo set_value('nickname'); ?>' /></td>
					</tr>
					<tr>
						<td><label for="email">E-mail:</label></td>
						<td><input  type="text" value="<?php echo set_value('email'); ?>" id="email" name="email"/></td>
					</tr>
					<tr>
						<td><label for="password">Senha:</label></td>
						<td><input type="password" class="keyboardInput" id="password" name="password"/></td>
					</tr>
					<tr>
						<td><label for="repeat">Repita a senha:</label></td>
						<td><input type="password" class="keyboardInput" id="repeat" name="repeat"/></td>
					</tr>
				</tbody>
			</table>
		<!-- Tabela do personagem -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Informações de personagem</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td><label for="character_name">Nome do personagem:</label></td>
						<td><input  type="text" id="character_name" value="<?php echo set_value('character_name'); ?>" name="character_name"/></td>
					</tr>
					<tr>
						<td><label for="sex">Gênero:</label></td>
						<td>
							<input name="sex" type="radio" id="sex" value="1" checked="checked" />
								masculino &nbsp;
							<input type="radio" id="sex" name="sex" value="0" />
								feminino 
						</td>
					</tr>
					<tr>
						<td><label for="vocation">Escolha sua raça:</label></td>
						<td>
							<select name="vocation" class="keyboardInput" id="vocation">
								<option value="1">Sorcerer</option>
								<option value="2">Druid</option>
								<option value="3">Paladin</option>
								<option value="4">Knight</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="city">Escolha a cidade:</label></td>
						<td>
							<select name="city" id="city">
								<?php 
									foreach($config['cities'] as $city => $name)  
									echo '<option value="'.$city.'">'.$name.'</option>'; 
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="world">Mundo:</label></td>
						<td>
							<?php 
								if(sizeof($config['worlds']) > 1) { 
							?>
							<select name="world" id="world">
							<?php
								foreach($config['worlds'] as $world => $name)  
								echo '<option value="'.$world.'">'.$name.'</option>'; 
							?>
							</select>
							<?php 
								}else{ 
							?>
							<input type="hidden" name="world" value="0" />
							<?php echo $config['worlds'][0]; ?>
							<?php } ?>
						</td>
					</tr>
				</tbody>
		</table>
		<!-- Tabela do captha -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Imagem de segurança</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><label for="captcha">Imagem:</label></td>
					<td><?php echo $captcha;?></td>
					<td><input type='text' name='captcha' id="captcha"/></td>
				</tr>
			</tbody>
		</table>
				<p>Ao registrar-se automaticamente você estará aceitando as regras do jogos, leia-as em <a href='#' onClick='$("#rules").toggle(500);'><em>Regras</em></a>.</p>
		<div id='rules' style='margin-top: 10px; width: 100%; height: 300px; overflow: auto; display: none; padding-right: 5px;'><?php echo nl2br(getContent("system/rules.php")); ?></div>
		<br />
		<center><button class="btn btn-success" type="submit">Registrar-se</button>
		<?php echo loader(); ?></center>
	</div>
</div>