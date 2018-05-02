<?php get_header(); ?>


      <header>
        <!-- Slideshow container -->
					<div class="slideshow-container">
						<?php
												$args = array( 'post_type' => 'teste2', 'posts_per_page' => 9 );
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post();

													$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						
												echo '<div class="meusSlides fade">
																<img src="'.esc_url($featured_img_url).'" style="width:100%">
															</div>';

												endwhile;
						?>




<a class="anterior" onclick="maisSlides(-1)">&#10094;</a>
<a class="proximo" onclick="maisSlides(1)">&#10095;</a>

</div>
				<!-- Slideshow container -->
        
				<iframe width="350" height="250" src="https://www.youtube.com/embed/YNnLmHkQuic?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				
        <div class="galeria-container">
					<?php
 						$indice = 1;
						$args = array( 'post_type' => 'teste', 'posts_per_page' => 9 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							
			 				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
			 	
							echo '<img src="'.esc_url($featured_img_url).'" onclick="openModal();currentSlide('.$indice.')" class="hover-shadow cursor">';
						
			 			$indice++;
			 			endwhile;
					?>
						
				
				</div>
				
				
      </header>
	<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
					<?php
						$args = array( 'post_type' => 'teste', 'posts_per_page' => 9 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							
			 				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
								
						echo '<div class="mySlides">
      							<img src="'.esc_url($featured_img_url).'"  style="width:100%">
    							</div>';
						
			 			endwhile;
					?>
    

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

		<?php
 						$indice = 1;
						$args = array( 'post_type' => 'teste', 'posts_per_page' => 9 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							
			 				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
								
						echo '<div class="column">
										<img class="demo cursor" src="'.esc_url($featured_img_url).'"  onclick="currentSlide('.$indice.')" ">
									</div>';
						
			 			$indice++;
			 			endwhile;
					?>
    
    
  </div>
</div>

		
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		
		
		
		
      <section class="main">
          
        
        <section class="principal">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
					
          <section class="post">
              
            <div class="principalTitulo">
              <div class="data">
                  
                <p><?php the_time('j') ?></p>
                <span><?php the_time('F') ?></span>
              </div>
                <p class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p>
            </div>
            <div class="marcadores">
              <ul>
								
             <?php
								
                $categories = get_the_category($post_ID);
                if ($categories) {
                  foreach ( $categories as $category ) {
                ?>
                
                  <li><a href="<?php echo get_category_link($category->term_id) ?>"><p><?php echo $category->name ?></p></a></li>
                  
            <?php
                  }
                }
            ?>
                  
                
                  
              </ul>
            </div>
              
              <?php
              $post_tag = "teste";
$the_query = new WP_Query( 'tag='.$post_tag );

if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
              
              ?>

            <p class="paragrafoPrincipal">

            <?php the_excerpt(); ?>
            </p>

          </section>
					
					<section class="comentario">
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            <p class="pcomentario">Comentarios <span class="fb-comments-count circleComentario" data-href="<?php the_permalink(); ?>"></span> </p>
          </section>
          
            
          
         
            
        <?php endwhile; else : ?>
                    <article>
                        <p>Sorry, no posts were found!</p>
                    </article>
            <?php endif; ?>
            
          <section class="postRelacionados">

						
						
            <ul class="ch-grid">
						<?php query_posts('showposts=5');
        if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
  					<li>
							<?php 
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
  ?>	<a href="<?php the_permalink(); ?>">
  						<div class="ch-item" style="background-image:url(<?= esc_url($featured_img_url); ?>)">
  							<div class="ch-info">
  								<h3><?php the_title(); ?></h3>
  							</div>
  						</div>
							</a>
  					</li>
						<?php endwhile; else : ?>
                    <article>
                        <p>Sorry, no posts were found!</p>
                    </article>
            <?php endif; ?>
  					
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
<p class="textocenter">Saiba mais</p>
    
    <section class="saibaMais">
			<!--						teste-->
						
<?php
  $args = array(
        'posts_per_page' => 3,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);
               
 
if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); 
?>
<article class="saibaMaisArticle">
	<?php 
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),array( 300, 300)); 
  ?>
		<div class="module" style="background-image:url(<?= esc_url($featured_img_url); ?>)">
			 
			
		
<h2><?php the_category(', '); ?></h2>
			</div>
					<p><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
					<p><?php the_excerpt();?>
					</p>
</article>

<?php
endwhile; else:
endif;
?>
<!--						teste-->
	
			

    </section>

    <p class="textocenter">O que é?</p>

		<section class="saibaMais">
				
			
			<!--						teste-->
						
<?php
  $args = array(
        'posts_per_page' => 5,
        'meta_key' => 'meta-checkbox-oque',
        'meta_value' => 'yes'
    );
    $oque = new WP_Query($args);
 
if ($oque->have_posts()): while($oque->have_posts()): $oque->the_post(); 
?>

<article class="saibaMaisArticle article2">
	<?php 
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),array( 250, 250)); 
  ?>
		<div class="module module2" style="background-image:url(<?= esc_url($featured_img_url); ?>)">
			 <h2><?php the_category(', '); ?></h2>
        </div>
					<p><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
					<p><?php the_excerpt();?>
					</p>
</article>

<?php
endwhile; else:
endif;
?>
<!--						teste-->
			
			
			
				
		</section>
		
<?php get_footer()?>