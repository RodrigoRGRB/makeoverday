<?php get_header(); ?>


<p class="textocenter"><?php printf( esc_html__( 'Mostrando resultado para: %s' ), '<span class="negrito">' . get_search_query() . '</span>' ); ?></p>
 <section class="main">
          
        
        <section class="principal full">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
					
          <section class="post full">
              
            <div class="principalTitulo">
              <div class="data">
								<?php //the_post_thumbnail(); ?>
                <p><?php the_time('j') ?></p>
                <span><?php the_time('F') ?></span>
              </div>
              <p class="titulo"><?php the_title(); ?><p>
            </div>
            <div class="marcadores full">
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
            <div class="fb-comments" data-href="http://makeoverday.com.br/" data-numposts="5"></div>
            <p class="pcomentario">Comente Aqui<span class="circleComentario"><?php echo full_comment_count(); ?></span> </p>
          </section>
            
        <?php endwhile; else : ?>
                    <article>
                        <p>Sorry, no posts were found!</p>
                    </article>
            <?php endif; ?>
            
        

      
    </section>
	 
</section>
    
   
		
<?php get_footer(); ?>