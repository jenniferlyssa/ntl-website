<!DOCTYPE html>
<?php global $inst_options; ?>
<html  lang="pt-br" xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:og="http://ogp.me/ns#"
	  xmlns:fb="https://www.facebook.com/2008/fbml"
	  <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NTL - Núcleo de Tecnologias Livres</title>
		<link rel="shortcut icon" href="img/favicon.ico" />

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/stylish-portfolio.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

		<?php
			// Metadados Open Graph (para compartilhamento no Facebook)
			echo "<meta property='og:type' content='".(is_home()?'website':'article')."' />\n";
			echo "<meta property='og:url' content='http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']."' />\n";

		?>

		<?php wp_head(); ?>
	</head>

	<body>
		<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    	<nav id="sidebar-wrapper">
    		<ul class="sidebar-nav">
    			<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
    			<li class="sidebar-brand"> <a href="#topo"  onclick = $("#menu-close").click(); >NTL</a> </li>
    			<li> <a href="#top" onclick = $("#menu-close").click();> Home </a> </li>
    			<li> <a href="#sobre" onclick = $("#menu-close").click();> Sobre </a> </li>
    			<li> <a href="#principios" onclick = $("#menu-close").click();> Princípios </a> </li>
    			<li> <a href="#projetos" onclick = $("#menu-close").click();> Projetos </a> </li>
    			<li> <a href="#membros" onclick = $("#menu-close").click();> Membros </a> </li>
    			<li> <a href="#contato" onclick = $("#menu-close").click();> Contato </a> </li>
    		</ul>
    	</nav>

		<div id="topo" class="header">
		<header>

			<?php if ( $inst_options['wpinst_barra'] == "sim" ): ?>
			<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
				<ul id="menu-barra-temp" style="list-style:none;">
					<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li>
					<li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
				</ul>
			</div>
			<?php endif; ?>

			<div id="menu_ufpel" class="corFundo">
				<div class="wrapper">
					<div class="hor_center" id="menu_ufpel_list">
					<?php if ( has_nav_menu( 'menu-topo' ) ): ?>
						<button class="ufpel-toggle"><span class="dashicons dashicons-menu"></span> &nbsp;MENU</button>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-topo', 'depth' => 1, 'menu_id' => 'menu-menu-ufpel', 'menu_class' => 'menu corFundo', 'container' => '') ); ?>
					<?php endif; ?>
					</div>
					<div class="hor_center" id="menu_ufpel_acess">
						<ul>
							<li class="acess"><a class="fonte_dim" href="#" title="Diminuir fonte">A-</a><a class="fonte_nor" href="#" title="Fonte normal">A</a><a class="fonte_aum" href="#" title="Aumentar fonte">A+</a></li>
							<li><a id="contraste" href="#">CONTRASTE</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="wrapper">
				<div id="header_content">
					<div id="titulo" class="titulosite">
						<a href="<?php bloginfo('url');?>">
							<span id="und_vinc"><?php if ( trim($inst_options['und_vinc']) ) echo $inst_options['und_vinc']; ?></span>
							<span id="nomesite"><?php bloginfo('name'); ?></span>
							<span class="descricaosite"><?php bloginfo('description'); ?></span>
						</a>
					</div>
					<div id="escudo">
					<?php
						if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
						}
					?>
					</div>

					<div id="busca">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div class="limpa"></div>
			</div>

			<div class="wrapper">
				<div id="menu_principal">
					<button class="principal-toggle"><span class="dashicons dashicons-menu"></span> &nbsp;MENU</button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 'container' => '') ); ?>
				</div>
			</div>
			<div class="limpa"></div>

			<?php
			if ( ! is_home() ) {
				global $modulos_footer;	// para uso no footer.php
				$modulos_header = array();
				$modulos_footer = array();

				// Checa módulos ativos nas páginas internas

				foreach ( explode( ',', $inst_options['wpinst_modulos'] ) as $modulo ) {
					$modulo_info = explode( '-', $modulo ); // 0 => nome, 1 => id, 2 => opcoes
					$modulo_opts = explode( ':', $modulo_info[2] );

					$optn = false;
					switch ( $modulo_info[0] ) {	// seleciona número da opção que indica se o módulo deve ser exibido nas internas
						case 'Imagemdest':
							$optn = 5;
							break;
						case 'Carossel':
							$optn = 0;
							break;
						case 'Vitrine':
							$optn = 8;
							break;
					}

					if ( $optn !== false ) {
						if ( $modulo_opts[ $optn ] == 'c' )
							array_push( $modulos_header, $modulo );		// enfileira módulo para exibição no cabeçalho
						elseif ( $modulo_opts[ $optn ] == 'r' )
							array_push( $modulos_footer, $modulo );		// enfileira módulo para exibição no rodapé (footer.php)
					}
				}

				if ( sizeof( $modulos_header ) )
					carregaModulos( implode( ',', $modulos_header ) );

			} // if ( ! is_home() )
			?>

		</header>
		<div class="limpa"></div> OIIIIIAWIJ
