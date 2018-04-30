<?php 

function add_estilos_e_scripts() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );


function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_theme_support('post-thumbnails');

function wpb_custom_new_menu() {
  register_nav_menu('meuMenu',__( 'Menu MakeOverDay' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/* Aqui é uma função interessante de form
function my_search_form($form) {
$form ='<div class="container">
		<form method="get" id="searchform" action="' . get_option('home') . '/" >
			<input type="text" class="inputPesquisa" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
			<button type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" /><i class="fas fa-search"></i></button>
		</form>
	</div>';
	
return $form;
}

add_filter('get_search_form', 'my_search_form'); 
*/

//somatorio de comentarios

function full_comment_count() {
	global $post;
	$url = get_permalink($post->ID);  

	$filecontent = file_get_contents('https://graph.facebook.com/?ids=' . $url);
	
	$json = json_decode($filecontent);
	$count = $json->$url->comments;
	$wpCount = get_comments_number();
	$realCount = $count + $wpCount;
if ($realCount == 0 || !isset($realCount)) {
    $realCount = 0;
}
	return $realCount;
}

/*Featured POst*/
function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );


function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );


















function sm_custom_meta_oque() {
    add_meta_box( 'sm_meta_oque', __( 'O que é?', 'sm-textdomain' ), 'sm_meta_callback_oque', 'post' );
}
function sm_meta_callback_oque( $post ) {
    $oque = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox-oque">
            <input type="checkbox" name="meta-checkbox-oque" id="meta-checkbox-oque" value="yes" <?php if ( isset ( $oque['meta-checkbox-oque'] ) ) checked( $oque['meta-checkbox-oque'][0], 'yes' ); ?> />
            <?php _e( 'O que é?', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta_oque' );


function sm_meta_save_oque( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox-oque' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox-oque', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox-oque', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save_oque' );




















?>
