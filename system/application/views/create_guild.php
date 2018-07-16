<?php
require_once("system/application/config/create_character.php");
echo "<div class='title'>Criar guilda</div>";
	if(count($characters) == 0) 
		error("Nenhum dos seus personagens tem o level requerido para criar uma guilda. (<b>".$config['levelToCreateGuild']."</b>)");
	else {
	error(validation_errors());
	echo form_open("guilds/create", array('method'=>'post'));
	echo "<label>Personagem:</label>";
	echo "<select name='character'>";
		foreach($characters as $character) {
			echo "<option value='".$character['id']."'>".$character['name']." (".$character['level'].")</option>";
		}
	echo "</select><br /><br />";
	echo "<label>Nome da guilda:</label>";
	echo "<input type='text' name='name'><br />";
	echo "<button class='btn btn-info' type='submit' name='submit'>Criar guilda</button>";
	echo "</form>";
	
	}
?>