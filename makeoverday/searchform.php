<?php
/**
Template Name: Search Form
**/

echo '<div class="container">
		<form method="get" id="searchform" action="' . get_option('home') . '/" >
			<input type="text" class="inputPesquisa" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
			<button type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" /><i class="fas fa-search"></i></button>
		</form>
	</div>'

?>