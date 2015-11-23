<div id = "btn-products" class = "col-sm-6">
	<span>
		<i id = "plus" class="fa fa-plus-circle fa-2x"></i>
		<a href = "#">lista de produtos</a>
	</span>
</div>

<form id = "busca" role="search" method="get" class="search-form col-sm-6" action="<?php echo home_url( '/' ); ?>">
	<input class = "form-busca" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Pesquise…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<button class = "btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search"></i></button>
</form>

<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'products',));?></header>