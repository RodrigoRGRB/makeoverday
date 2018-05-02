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
$access_token="19469326.1677ed0.12f94b8c20494361aee95a32ba39d9e8";
$photo_count=7;
     
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
<script>
var posicaoIndex = 1;
mostrarSlides(posicaoIndex);

function maisSlides(n) {
  mostrarSlides(posicaoIndex += n);
}


function mostrarSlides(n) {
  var i;
  var power = document.getElementsByClassName("meusSlides");
  var pontos = document.getElementsByClassName("ponto");
  if (n > power.length) {posicaoIndex = 1}    
  if (n < 1) {posicaoIndex = power.length}
  for (i = 0; i < power.length; i++) {
      power[i].style.display = "none";  
  }
  for (i = 0; i < pontos.length; i++) {
      pontos[i].className = pontos[i].className.replace(" active", "");
  }
  power[posicaoIndex-1].style.display = "block";  
  pontos[posicaoIndex-1].className += " active";
}
</script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
<!-- Scripts -->
    </body>
</html>
