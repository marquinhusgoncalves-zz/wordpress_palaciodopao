<?php

	// Navigation Menus
register_nav_menus(array(
	'primary'    => __( 'Primary Menu' ),
	'products'   => __( 'Products Menu' ),
	'footer' 	 => __( 'Footer Menu' ),
	'extra-menu' => __( 'Extra Menu' )
	));

function my_login_head() {
	echo "
	<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/img/logo.svg') no-repeat scroll center top transparent;
			background-size: contain;
			height: 110px;
			width: 300px;
		}
	</style>
	";
}
add_action("login_head", "my_login_head");

function widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Primary', 'widgets_init' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name' => __( 'Footer', 'widgets_init' ),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', 'widgets_init' );


	// // infinite Scroll
function infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'containerScroll',
		'render' 	=> 'infinite_scroll_render',
		'footer'	=> 'page',
		// 'type'      => 'scroll',
		// 'wrapper'   => true,
		) );
}
add_action( 'init', 'infinite_scroll_init' );

function infinite_scroll_render() {
	get_template_part( 'loop' );
}


	// Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 800, 800 );


	//image catagory
add_action('admin_head', 'wpds_admin_head');
add_action('edit_term', 'wpds_save_tax_pic');
add_action('create_term', 'wpds_save_tax_pic');
function wpds_admin_head() {
	$taxonomies = get_taxonomies();
	//$taxonomies = array('category'); // uncomment and specify particular taxonomies you want to add image feature.
	if (is_array($taxonomies)) {
		foreach ($taxonomies as $z_taxonomy) {
			add_action($z_taxonomy . '_add_form_fields', 'wpds_tax_field');
			add_action($z_taxonomy . '_edit_form_fields', 'wpds_tax_field');
		}
	}
}


	// add image field in add form
function wpds_tax_field($taxonomy) {
	wp_enqueue_style('thickbox');
	wp_enqueue_script('thickbox');
	if(empty($taxonomy)) {
		echo '<div class="form-field">
		<label for="wpds_tax_pic">Picture</label>
		<input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="" />
	</div>';
}
else{
	$wpds_tax_pic_url = get_option('wpds_tax_pic' . $taxonomy->term_id);
	echo '<tr class="form-field">
	<th scope="row" valign="top"><label for="wpds_tax_pic">Picture</label></th>
	<td><input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="' . $wpds_tax_pic_url . '" /><br />';
		if(!empty($wpds_tax_pic_url))
			echo '<img src="'.$wpds_tax_pic_url.'" style="max-width:200px;border: 1px solid #ccc;padding: 5px;box-shadow: 5px 5px 10px #ccc;margin-top: 10px;" >';
		echo '</td></tr>';
	}
	echo '<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#wpds_tax_pic").click(function() {
			tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
			return false;
		});
window.send_to_editor = function(html) {
	jQuery("#wpds_tax_pic").val( jQuery("img",html).attr("src") );
	tb_remove();
}
});
</script>';
}


	// save our taxonomy image while edit or save term
function wpds_save_tax_pic($term_id) {
	if (isset($_POST['wpds_tax_pic']))
		update_option('wpds_tax_pic' . $term_id, $_POST['wpds_tax_pic']);
}


	// output taxonomy image url for the given term_id (NULL by default)
function wpds_tax_pic_url($term_id = NULL) {
	if ($term_id)
		return get_option('wpds_tax_pic' . $term_id);
	elseif (is_category())
		return get_option('wpds_tax_pic' . get_query_var('cat')) ;
	elseif (is_tax()) {
		$current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
		return get_option('wpds_tax_pic' . $current_term->term_id);
	}
}


	// Catch the second image
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	if(empty($first_img)) {
		$first_img = "/path/to/default.png";
	}
	return $first_img;
}

	//POST PIZZAS

	add_action('init', 'type_post_pizza');

	function type_post_pizza() {
		$labels = array(
			'name' => _x('Pizza', 'post type general name'),
			'singular_name' => _x('Pizza', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Pizzas'
			);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'register_meta_box_cb' => 'pizza_meta_box',
			//'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
			'supports' => array('title','editor')
			);

		register_post_type( 'pizza' , $args );
		flush_rewrite_rules();
	}

	add_action( 'add_meta_boxes', 'pizza_add_meta_box' );

	function pizza_add_meta_box() {
		add_meta_box(
			'pizza_metaboxid',
			'Atributos da Pizza',
			'pizza_inner_meta_box',
			'pizza'
		);
	}

	function pizza_inner_meta_box( $pizza ) {
	?>
	<p>
	  <label for="codigo-familia">Código:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <label for="familia">Valor Família:</label>
	  <br />
	  <input type="text" name="codigo-familia" value="<?php echo get_post_meta( $pizza->ID, '_codigo-familia', true ); ?>" />
	  <input type="text" name="familia" value="<?php echo get_post_meta( $pizza->ID, '_familia', true ); ?>" />
	</p>
	<p>
	  <label for="codigo-broto">Código:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <label for="broto">Valor Broto:</label>
	  <br />
	  <input type="text" name="codigo-broto" value="<?php echo get_post_meta( $pizza->ID, '_codigo-broto', true ); ?>" />
	  <input type="text" name="broto" value="<?php echo get_post_meta( $pizza->ID, '_broto', true ); ?>" />
	</p>
	<p>
	  <label for="codigo-individual">Código:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <label for="individual">Valor Individual:</label>
	  <br />
	  <input type="text" name="codigo-individual" value="<?php echo get_post_meta( $pizza->ID, '_codigo-individual', true ); ?>" />
	  <input type="text" name="individual" value="<?php echo get_post_meta( $pizza->ID, '_individual', true ); ?>" />
	</p>
	<?php
	}

	add_action( 'save_post', 'ewp_pizza_save_post', 10, 2 );

	function ewp_pizza_save_post( $pizza_id, $pizza ) {

	   // Verificar se os dados foram enviados, neste caso se a metabox existe, garantindo-nos que estamos a guardar valores da página de filmes.
	   if ( ! $_POST['familia'] ) return;

	   // Fazer a saneação dos inputs e guardá-los
	   update_post_meta( $pizza_id, '_codigo-familia', strip_tags( $_POST['codigo-familia'] ) );
	   update_post_meta( $pizza_id, '_familia', strip_tags( $_POST['familia'] ) );
	   update_post_meta( $pizza_id, '_codigo-broto', strip_tags( $_POST['codigo-broto'] ) );
	   update_post_meta( $pizza_id, '_broto', strip_tags( $_POST['broto'] ) );
	   update_post_meta( $pizza_id, '_codigo-individual', strip_tags( $_POST['codigo-individual'] ) );
	   update_post_meta( $pizza_id, '_individual', strip_tags( $_POST['individual'] ) );

	   return true;

	}