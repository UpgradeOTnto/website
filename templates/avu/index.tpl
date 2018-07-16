<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta name="Description" content="Information architecture, Web Design, Web Standards." />
		<meta name="Keywords" content="your, keywords" />
		<meta http-equiv="Content-Type" content="text/html;" />
		<meta name="Distribution" content="Global" />
		<meta name="author" content="Unknown" />
		<meta name="Robots" content="index,follow" />
		<meta charset="UTF-8">
		<title>{$title}</title>
		<!-- Favicon -->
		<link href="{$template_path}/favicon.ico" rel="icon" type="image/x-icon" />
		<!-- CSS -->
		<link rel="stylesheet" href="{$template_path}/docs/estilo.css" type="text/css" />
		<!-- Bootstrap -->
		<link rel="stylesheet" media="screen" href="{$template_path}/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{$template_path}/bootstrap/css/bootstrap-responsive.min.css">
		<!-- Scripts -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="{$template_path}/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="site">
			<div id="topo">
				<div class="busca">
					<form class="form-search" method="post" action="{$path}/index.php/character/view">
	  					<input class="input-medium search-query" type="text" name="name" value="" placeholder="Personagem"/>
	 					<button class="btn btn-small" type="submit" name="submit">Procurar</button>
					</form>
				</div>
			</div>
			<div id="menu">
				<div class="title">Navegação</div>
				<ul class="sidemenu">
					<li><a href="{$path}">Inicio</a></li>				
					{if $logged == 1}
					<li><a href="{$path}/index.php/account">Conta</a></li>
					{else}
					<li><a href="{$path}/index.php/account/create">Criar Conta</a></li>
					<li><a href="{$path}/index.php/account/login">Logar</a></li>
					{/if}
					<li><a href="{$path}/index.php/character/view">Personagens</a></li>
					<li><a href="{$path}/index.php/guilds">Guildas</a></li>
					<li><a href="{$path}/index.php/bugtracker">Bug Tracker</a></li>	
					<li><a href="{$path}/index.php/p/v/fragers">Top fraggers</a></li>	
					<li><a href="{$path}/index.php/video">Videos</a></li>	
					<li><a href="{$path}/index.php/houses/main">Casas</a></li>	
					<li><a href="{$path}/index.php/p/v/deaths">Últimas mortes</a></li>	
					<li><a href="{$path}/index.php/p/v/gallery">Galeria</a></li>	
					<li><a href="{$path}/index.php/p/v/gifts">Shop</a></li>	
					<li><a href="{$path}/index.php/profile/community">Comunidade</a></li>	
				</ul>	
			</div>
			<div id="conteudo">
				{$main}
			</div>
			<div id="painel">
				<div class="title">Servidor</div>
					{foreach from=$worlds key=id item=world}
						&nbsp; <b>Mundo:</b> {$world} <br />
						&nbsp; <b>Status:</b>  
							{if $serverOnline[$id]}
								<font color='green'>Online</font><br />
								&nbsp; <b>Uptime:</b> {$serverUptime[$id]} <br />
								&nbsp; <b>Players:</b> {$serverPlayers[$id]}/{$serverMax[$id]}<br /><br />

							{else}
								<font color='red'>Offline</font><br />
							{/if}
					{/foreach}
					{$poll}
			</div>
			<div id="footer">
				<a href="{$path}/index.php/credits">Morden AAC</a>, 
			Page rendered in: {$renderTime}
			{$admin}<br />
			Optimizado por <a href="http://www.xtibia.com/forum/user/336584-avuenja/" target="_blank">Avuenja</a>.
			</div>
		</div>
	</body>
</html>