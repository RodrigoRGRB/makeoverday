  <?php wp_footer(); ?>    
	<section class="anuncio">
            Anuncie Aqui
        </section>



    <a href="#top" class="go-top"><img src="<?php echo get_template_directory_uri()?>/img/topo.png"></a>

    <footer>
      <section class="rodape">
        <p><span class="nicole">@NICOLEMAKE</span> no instagram</p>
        <div class="imagem">
					<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="482019713.1677ed0.53f4e62b666a45a3ae3b7fdf1b683b3d";
$photo_count=6;
     
$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";
																			 
																			 $json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
																			 
																			 $json = file_get_contents($json_link);
$obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);
																			 
																			 foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
           
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
}
		
?>


        </div>
      </section>
    </footer>

<!-- Scripts --> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
<!-- Scripts -->
    </body>
</html>
