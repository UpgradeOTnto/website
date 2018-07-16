<?php
echo form_open("character/view");
?>
<div class='message'>
<div class='title'>Procurar personagens</div>
<table class='table table-striped'>
<tbody>
	<tr>
		<td><label for="search">Nome do personagem:</label></td>
		<td><input name='name' id='search' type='text'></td>
		<td><button class="btn btn-success btn-small" type="submit">Procurar</button></td>
	</tr>
</tbody>
</form>
</table>
</div>
<?php 
	if(!empty($_SESSION['sCharacters'])) {
		echo "<div class='message'><div class='title'>Histórico</div><div id='history' class='content'>";
			foreach($_SESSION['sCharacters'] as $character) {
				echo "<b><a href=\"".url('character/view/'.$character['name'])."\">".ucwords($character['name'])."</a></b> - ".ago($character['time'])."<br/>";
			}
		?>
			<a href='#' onClick='$("#history").load("<?php echo url('character/clearHistory');?>");'>Limpar Histórico</a>
		<?php 
		echo "</div></div>";
	}
?>