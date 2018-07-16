<?php 
$GLOBALS['characters'] = $characters;
$ide = new IDE;
try { $ide->loadInjections("account"); } catch(Exception $e) { error($e->getMessage()); }
	echo "<h2>Olá <a href='".url('profile/view/'.$_SESSION['nickname'])."'>".ucfirst($_SESSION['nickname'])."</a>!</h2>";
	
	if($messages != 0)
		if($messages == 1)
			echo "<center><b>Você tem $messages nova mensagem! Clique <a href='".url('msg/inbox')."'>aqui</a> e leia!</b></center><br/>";
		else
			echo "<center><b>Você têm $messages novas mensagens! Clique <a href='".url('msg/inbox')."'>aqui</a> e leia!</b></center><br/>";
?>
<script>$(function(){$("#tabs").tabs();});</script>
<?php

echo "<table class='table table-striped'>";
echo '<thead>
		<tr><td>Personagens</td></tr>
	</thead>';
	echo "<tbody>";
	echo "<table width='100%'>";
	echo "<tr><td><center><b>Nome</b></center></td><td><center><b>Level</b></center></td><td><center><b>Ações</b></center></td></tr>";
	foreach($characters as $row) {
		echo "<tr class='highlight'><td><center><a href=\"".WEBSITE."/index.php/character/view/$row->name\">$row->name</a></center></td><td><center>$row->level</center></td><td><center><a href=\"".WEBSITE."/index.php/account/editcomment/$row->id\" class='tipsy' title='Editar comentário'><img src='".WEBSITE."/public/images/edit.gif'/></a> <a href='#' onClick='if(confirm(\"Are you sure?\")) window.location.href=\"".WEBSITE."/index.php/account/deletePlayer/$row->id\"' class='tipsy' title='Delete character'><img src='".WEBSITE."/public/images/false.gif'/></a></center></td></tr>";
	
	}
	echo "</table><br />";
	echo "<tr><td><center><a href='".WEBSITE."/index.php/character/create_character'><button class='btn btn-info' onClick=\"window.location.href='".WEBSITE."/index.php/character/create_character';\">Criar personagem</button></a></center></td></tr>";
	echo "</tbody><br />";
	echo "<thead>";
	echo "<tr><td>Conta</td></tr>";
	echo "</thead>";
	echo "<tbody>";
	echo "<center><a href='".WEBSITE."/index.php/account/changepassword'><button class='btn btn-info' onClick=\"window.location.href='".WEBSITE."/index.php/account/changepassword';\">Change password</button></a></center>";
	echo "</tbody><br />";
	echo "<thead>";
	echo "<tr><td>Comunidade</td></tr>";
	echo "</thead><br />";
	echo "<tbody>";
		echo "<tr><td><b>Profile</b></td></tr><br />";
		echo "<tr><td><a href='".WEBSITE."/index.php/profile/update'>Editar informações</a></td></tr><br />";
		echo "<tr><td><a href='".WEBSITE."/index.php/profile/avatar'>Editar avatar</a></td></tr><br />";
		echo "<br/><b>Mensagens</b><br />";
		echo "<tr><td><a href='".WEBSITE."/index.php/msg/inbox'>Caixa de entrada</a></td></tr><br />";
		echo "<tr><td><a href='".WEBSITE."/index.php/msg/outbox'>Caixa de saída</a></td></tr><br />";
		echo "<tr><td><a href='".WEBSITE."/index.php/msg/write'>Escrever nova</a></td></tr>";
	echo "</tbody>";
	echo "<tbody>";
		echo "<br /><center><b>Você tem certeza que deseja sair?</b><br /><a href='".WEBSITE."/index.php/account/logout'><button class='btn btn-danger' onClick=\"window.location.href='".WEBSITE."/index.php/account/logout';\">Sair</button></a></center>";
	echo "</tbody>";
echo "</table>";

if(empty($acc[0]['rlname']) || empty($acc[0]['location']) || empty($acc[0]['about_me']))
	alert("You might consider updating your public profile <a href='".WEBSITE."/index.php/profile/update'><b>here</b></a>!");
?>