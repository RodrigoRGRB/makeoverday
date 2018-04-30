<?php get_header(); ?>
 <section class="main">
          
        
        <section class="principal">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
          <section class="post">
              
            <div class="principalTitulo">
              <div class="data">
								
                <p><?php the_time('j') ?></p>
                <span><?php the_time('F') ?></span>
              </div>
              <p class="titulo"><?php the_title(); ?><p>
            </div>
            <div class="marcadores">
              <ul>
								
             <?php
                $categories = get_the_category($post_ID);
                if ($categories) {
                  foreach ( $categories as $category ) {
                ?>
                
                  <li><a href="<?php get_category_link( $category->term_id ) ?>"><p><?php echo $category->name ?></p></a></li>
                  
            <?php
                  }
                }
            ?>
                  
                
                  
              </ul>
            </div>
						<?php the_post_thumbnail(); ?>
              
              
            <p class="paragrafoPrincipal">

            <?php the_excerpt(); ?>
            </p>

          </section>
          
            
          
          <section class="comentario">
            <img src="<?php echo get_template_directory_uri()?>/img/curtir.png" />
            <p class="pcomentario">Comente Aqui<span class="circleComentario">33</span> </p>
          </section>
            
        <?php endwhile; else : ?>
                    <article>
                        <p>Sorry, no posts were found!</p>
                    </article>
            <?php endif; ?>
            
          <section class="postRelacionados">
            <ul class="ch-grid">
  					<li>
  						<div class="ch-item ch-img-1">
  							<div class="ch-info">
  								<h3>Use what you have</h3>
  							</div>
  						</div>
  					</li>
  					<li>
  						<div class="ch-item ch-img-2">
  							<div class="ch-info">
  								<h3>Common Causes of Stains</h3>
  							</div>
  						</div>
  					</li>
  					<li>
  						<div class="ch-item ch-img-3">
  							<div class="ch-info">
  								<h3>Pink Lightning</h3>
  							</div>
  						</div>
  					</li>
            <li>
  						<div class="ch-item ch-img-3">
  							<div class="ch-info">
  								<h3>Pink Lightning</h3>

  							</div>
  						</div>
  					</li>
            <li>
  						<div class="ch-item ch-img-3">
  							<div class="ch-info">
  								<h3>Pink Lightning</h3>
  							</div>
  						</div>
  					</li>
  				</ul>
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
<?php get_footer(); ?>