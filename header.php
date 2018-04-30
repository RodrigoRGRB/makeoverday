<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
			<meta property="fb:app_id" content="2189759917976983"/>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
     <?php wp_head(); ?>
				
			
 
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dorsa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">


      <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    </head>
    <body>
			<div id="fb-root"></div>
<script>
	(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=1196088417133756&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
			</script>
			
			<div class="menusuper">
      <nav>
						<img src="<?php echo get_template_directory_uri()?>/img/logo.png" onclick="window.location='<?php echo esc_url( home_url( '/' ) ); ?>';"/>
        <ul>					
            
					<?php 

						$my_menu = array( 
						'menu' => 'main-menu',
						'container' => '',
						'items_wrap' => '%3$s' 
						);

						wp_nav_menu( $my_menu );

					?>
					
            <li>
							<?php get_search_form(); ?>
						</li>
            <li class="menuSocial"><a href="https://www.facebook.com/NicoleMakeOficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="menuSocial"><a href="https://www.instagram.com/nicolemake/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="menuSocial"><a href=""><i class="fab fa-snapchat-ghost"></i> </a></li>
						<li class="menuSocial"><a href="https://twitter.com/nicolemake_" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li class="menuSocial"><a href="https://www.youtube.com/user/nicolegon1984" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
      </nav>
</div>
    <div class="super">
      <div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri()?>/img/logofixo.png" />
					</a>
      </div>
      <div class="menu">
        <ul>
            <?php 

						$my_menu = array( 
						'menu' => 'main-menu',
						'container' => '',
						'items_wrap' => '%3$s' 
						);

						wp_nav_menu( $my_menu );

					?>
          </ul>

          <?php get_search_form(); ?>
      </div>

    </div>

