<?php include("public/js/keyboard.php");?>
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE; ?>/public/css/keyboard.css">
<?php 
	error(validation_errors());
	echo "<div class='message'>";
	echo "<div class='title'>Logar</div>";
	echo "<div class='content'>";
	echo "<img style='float: left;' src='".WEBSITE."/public/images/login.png'/>";
	echo form_open('account/login');	
	?>
	<label for="name">Nome da conta</label><input type="password" value="<?php echo set_value('name'); ?>" class="keyboardInput" name="name"/><br>
	<label for="name">Senha</label><input  type="password"" value="<?php echo set_value('pass'); ?>" class="keyboardInput" name="pass"/><br>
	<center><button class="btn" type="submit">Logar</button></center>
	<?php 
	echo "</form><br/>";
	echo "</div>";
	echo "<div class='bar'>Ainda não tem conta? Clique <a href='".WEBSITE."/index.php/account/create'><b>aqui</b></a> e registre-se!</div>";
	echo "</div>";
	echo "<div class='messageAdd'><b>Perdeu sua conta? Clique <a href='".WEBSITE."/index.php/account/lost'>aqui</a>!</b></div>";

?>