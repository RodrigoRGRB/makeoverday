<?php 
	//Template Name: Contato
	get_header(); 
?>
		
      <section class="main">
        <section class="principal">
          <section class="post">
              
            <div class="principalTitulo">
              
                <p class="titulo">Contato<p>
            </div>
            
            <p class="paragrafoPrincipal">
							<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post();
										the_content();
									endwhile;
								else :
									echo wpautop( 'Sorry, no posts were found' );
								endif;
							?>
            </p>

          </section>
					

      </section>

      <section class="perfil">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/perfil.png" alt="perfil">
          <p>Nicole Make</p>
          <p>Maquiadora profissional, vegana, protetora dos animais, gaúcha, mora em São Paulo.</p>
        </div>

        <div class="redes">
          <a href="https://www.facebook.com/NicoleMakeOficial/">	<img src="<?php echo get_template_directory_uri()?>/img/facebook.png" alt="facebook">
					</a>
					<a href="https://www.instagram.com/nicolemake/">
						<img src="<?php echo get_template_directory_uri()?>/img/instagram.png" alt="instagram">	
					</a>
					<a href="https://twitter.com/nicolemake_"><img src="<?php echo get_template_directory_uri()?>/img/twitter.png" alt="twitter"></a>
          
						<a href="https://www.youtube.com/user/nicolegon1984">
						<img src="<?php echo get_template_directory_uri()?>/img/youtube.png" alt="youtube">
						</a>
          
          
          <img src="<?php echo get_template_directory_uri()?>/img/snapchat.png" alt="snapchat">
        </div>

        <div class="formulario">
          <p>Quer ficar por dentro das novidades?<br>Coloque seu email aqui :)</p>
          <form>
            <input type="text" class="caixa">
            <button type="submit"><i class="fas fa-check"></i></button>
          </form>
        </div>

        <div class="facebook">
          <p>Siga FanPage :)</p>
          <div class="fb-page" data-href="https://www.facebook.com/NicoleMakeOficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NicoleMakeOficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NicoleMakeOficial/">Nicole Make</a></blockquote></div>
        </div>

      </section>

    </section>

<?php get_footer()?>