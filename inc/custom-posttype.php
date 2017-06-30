
<?php
//custom post type portfolio
 if(! function_exists( 'kilobyte_custom_post_type_portfolio' )):
function kilobyte_custom_post_type_portfolio(){
	$labels = array( 
		'name'=>'Portfolio',
		'singular_name'=>'Portfolio',
		'add_new' => 'Add Portfolio',
		'all_items' => 'All Portfolio',
		'add_new_item'=> 'Add Portfolio',
		'new_item' => 'New Portfolio',
		'view_item' => 'View Portfolio',
		'search_item' => 'Search Portfolio',
		'not_found' =>	'no items found',
		'not_found_in_trash' => 'not found in trash',
		'parent_item_colon' => 'parent'	
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' =>'post',
		'heirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'revisons',
			'custom-fields',
			),
		'menu_position' => 5,
		'rewrite' => array( 'slug' => 'portfolio','with_front' => false ),
		'exclude_from_search' => false
		);

	register_post_type('post-type-portfolio',$args);
}
endif;

add_action('init','kilobyte_custom_post_type_portfolio' );

//custom post type Case Study

if(!function_exists( 'kilobyte_custom_post_type_casestudy')):
function kilobyte_custom_post_type_casestudy(){
	$labels2 = array( 
		'name'=>'Case Study',
		'singular_name'=>'Case Study',
		'add_new' => 'Add Case Study',
		'all_items' => 'All Case Study',
		'add_new_item'=> 'Add Case Study',
		'new_item' => 'New Case Study',
		'view_item' => 'View Case Study',
		'search_item' => 'Search Case Study',
		'not_found' =>	'no items found',
		'not_found_in_trash' => 'not found in trash',
		'parent_item_colon' => 'parent'	
		);
	$args2 = array(
		'labels' => $labels2,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'casestudy','with_front' => false ),
		'capability_type' =>'post',
		'heirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'revisons',
			'post_formats',
			'custom-fields'
			),
		'menu_position' => 6,
		'exclude_from_search' => false
		);

	register_post_type('post-type-casestudy',$args2);
}
endif;

add_action('init','kilobyte_custom_post_type_casestudy' );

//custom taxonomies
if ( ! function_exists( 'kilobyte_custom_taxonomy')):
function kilobyte_custom_taxonomy(){
$labels = array(
		'name'              => 'Portfolio types',
		'singular_name'     => 'Portfolio types',
		'search_items'      => 'search types',
		'all_items'         => 'all types',
		'parent_item'       => 'parent Type',
		'parent_item_colon' => 'parent Type',
		'edit_item'         => 'edit Type',
		'update_item'       => 'update Type',
		'new_item_name'     => 'new type Name',
		'menu_name'         => 'Portfolio types'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio/type','with_front' => false ),
	);
	register_taxonomy('Portfolio Types',array('post-type-portfolio'),$args );
	}
	endif;

add_action('init','kilobyte_custom_taxonomy' );

// taxonomy for casestudy
if ( ! function_exists( 'kilobyte_custom_taxonomy_casestudy')):
function kilobyte_custom_taxonomy_casestudy(){
$labels = array(
		'name'              => 'Casestudy type',
		'singular_name'     => 'Casestudy type',
		'search_items'      => 'search types',
		'all_items'         => 'all types',
		'parent_item'       => 'parent Type',
		'parent_item_colon' => 'parent Type',
		'edit_item'         => 'edit Type',
		'update_item'       => 'update Type',
		'new_item_name'     => 'new type Name',
		'menu_name'         => 'Casestudy type'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'casestudy/type' ),
	);
	register_taxonomy('Casestudy type',array('post-type-casestudy'),$args );
	}
	endif;

add_action('init','kilobyte_custom_taxonomy_casestudy' );


//custom post type Personal blogs

if(!function_exists( 'kilobyte_custom_post_type_Personalblogs')):
function kilobyte_custom_post_type_Personalblogs(){
	$labels = array( 
		'name'=>'Personal blogs',
		'singular_name'=>'Personal blogs',
		'add_new' => 'Add Personal blogs',
		'all_items' => 'All Personal blogs',
		'add_new_item'=> 'Add Personal blogs',
		'new_item' => 'New Personal blogs',
		'view_item' => 'View Personal blogs',
		'search_item' => 'Search Personal blogs',
		'not_found' =>	'no items found',
		'not_found_in_trash' => 'not found in trash',
		'parent_item_colon' => 'parent'	
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'Personalblogs','with_front' => false ),
		'capability_type' =>'post',
		'heirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'revisons',
			'post_formats',
			'custom-fields'
			),
		'menu_position' => 7,
		'exclude_from_search' => false
		);

	register_post_type('Personalblogs',$args);
}
endif;

add_action('init','kilobyte_custom_post_type_Personalblogs' );

// taxonomy for Personalblogs
if ( ! function_exists( 'kilobyte_custom_taxonomy_Personalblogs')):
function kilobyte_custom_taxonomy_Personalblogs(){
$labels = array(
		'name'              => 'Personalblogs type',
		'singular_name'     => 'Personalblogs type',
		'search_items'      => 'search types',
		'all_items'         => 'all types',
		'parent_item'       => 'parent Type',
		'parent_item_colon' => 'parent Type',
		'edit_item'         => 'edit Type',
		'update_item'       => 'update Type',
		'new_item_name'     => 'new type Name',
		'menu_name'         => 'Personalblogs type'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Personalblogs' ),
	);
	register_taxonomy('Personalblogs type',array('post-type-Personalblogs'),$args );
	}
	endif;

add_action('init','kilobyte_custom_taxonomy_Personalblogs' );
