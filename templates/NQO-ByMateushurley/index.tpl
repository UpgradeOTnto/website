<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Vean" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Site Description." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		{$head}
		<title>.:: NARUTO WHITE ONLINE ::.</title>
		<link rel="stylesheet" type="text/css" href="{$path}/templates/NQO-By Mateushurley/main.css" />
		<link href="{$path}/templates/NQO-By Mateushurley/favicon.ico" rel="shortcut icon" />
	</head>
	<!--Google-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15249041-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<body>
		<div id="vt_page">
			<div id="vt_header"></div>
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
<center>
						<div class="header"></div></center>
						<ul>
							<li><a href="{$path}">Novidades</a></li>
							<li><a href="{$path}/index.php/bugtracker">Bugs Reportados</a></li>
						</ul>
					</div>
					<div id="vt_account_menu"><center>
						<div class="serv"></div></center>
						<ul>
							{if $logged == 1}
							<li><a href="{$path}/index.php/account/">Minha Conta</a></li>
							<li><a href="{$path}/index.php//p/v/pagseguro">Donate</a></li>
							<li><a href="{$path}/index.php/p/v/gifts/">Shop</a></li>
							<li><a href="{$path}/index.php/p/v/chars">Venda de Chars</a></li>
							{else}
							<li><a href="{$path}/index.php/account/create">Criar Conta</a></li>
							<li><a href="{$path}/index.php/account/login">Login</a></li>
							<li><a href="{$path}/index.php/p/v/pacc">Premmy Points</a></li>
							<li><a href="{$path}/index.php/p/v/vpacc">Vantagens Premmy</a></li>
							<li><a href="{$path}/index.php/p/v/chars">Venda de Chars</a></li>
						
							{/if}
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
						    <li><a href="{$path}/index.php/p/v/ts">Teamspeak</a></li>
							<li><a href="{$path}/index.php/character/view">Procurar Personagem</a></li>
							<li><a href="{$path}/index.php/guilds">Guilds</a></li>
							<li><a href="{$path}/index.php/p/v/fragers">Top fraggers</a></li>	
							<li><a href="{$path}/index.php/video">Videos</a></li>	
							<li><a href="{$path}/index.php/houses/main">Casas</a></li>	
							<li><a href="{$path}/index.php/p/v/deaths">Ultimas Mortes</a></li>	
							<li><a href="{$path}/index.php/p/v/gallery">Galeria</a></li>	
							<li><a href="{$path}/index.php/highscores">Rank</a></li>	
							<li><a href="{$path}/index.php/profile/community">Comunidade</a></li>
		                 	<li><a href="{$path}/index.php/character/online">Online</a></li>

						</ul>
					</div>
					<div class="info"></div>
					<ul>
				          	<li><a href="{$path}/index.php/p/v/guia">Guia</a></li>
				        	<li><a href="{$path}/index.php/p/v/faq">FAQ</a></li>
				        	<li><a href="{$path}/index.php/p/v/regras">Regras</a></li>
							</ul>
					</div>
				<div id="vt_content">
					{$main}
				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="https://www.mediafire.com/?73k8mr44mb88opa" class="button">
									 <span></span>
								</a>
								
								<a href="{$path}/index.php/p/v/gifts" class="button2"></a>
							<div class="vt_panel_module"><center>
								<div class="header">Server Status</div></centeR>
								{foreach from=$worlds key=id item=world}
								<div>
									<b>Servidor:</b> {$world} <br />
									<b>Status:</b>  
									{if $serverOnline[$id]}
										<span style="color: green;font-weight: bold;">Online</span><br />
										<b>Uptime:</b> {$serverUptime[$id]} <br />
										<b>Players:</b> {$serverPlayers[$id]}/{$serverMax[$id]}<br /><br />
									{else}
										<span style="color: red;font-weight: bold;">Offline</span>
									{/if}
								</div>

								{/foreach}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="vt_footer">
				<div class="column first">
					<a href=""><img src="{$path}/templates/NQO-By Mateushurley/images/authornote.fw.png" alt="Designed by Mateushurley" /></a>
				</div>
				<div class="column second">
					<p>2014- NTOWhite			<p><small>Page rendered in: {$renderTime} {$admin}</small></p>
				</div>
				<div class="column third">

				</div>
			</div>
		</div>
	</body>
</html>