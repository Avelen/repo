<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage ok-ind
 */

add_theme_support('title-tag');

register_nav_menus(array(
	'top' => 'Верхнее',
	'bottom' => 'Внизу'
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 150);
add_image_size('big-thumb', 400, 400, true);


register_sidebar(array(
	'name' => 'Меню в шапке левая колонка',
	'id' => "header_1",
	'description' => 'Левая колонка виджетов в меню',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="modal-menu__item__title h3">',
	'after_title' => "</span>\n",
));

register_sidebar(array(
	'name' => 'Шапка центральная колонка',
	'id' => "header_2",
	'description' => 'Центральная колонка виджетов в шапке',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="modal-menu__item__title h3">',
	'after_title' => "</span>\n",
));

register_sidebar(array(
	'name' => 'Шапка правая колонка',
	'id' => "header_3",
	'description' => 'Правая колонка виджетов в шапке',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="modal-menu__item__title h3">',
	'after_title' => "</span>\n",
));


register_sidebar(array(
	'name' => 'Подвал левая колонка',
	'id' => "footer_1",
	'description' => 'Левая колонка виджетов в подвале',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="footer-bottom__title h4">',
	'after_title' => "</span>\n",
));

register_sidebar(array(
	'name' => 'Подвал центральная колонка',
	'id' => "footer_2",
	'description' => 'Центральная колонка виджетов в подвале',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="footer-bottom__title h4">',
	'after_title' => "</span>\n",
));

register_sidebar(array(
	'name' => 'Подвал правая колонка',
	'id' => "footer_3",
	'description' => 'Правая колонка виджетов в подвале',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="footer-bottom__title h4">',
	'after_title' => "</span>\n",
));


if (!class_exists('clean_comments_constructor')) {
	class clean_comments_constructor extends Walker_Comment {
		public function start_lvl( &$output, $depth = 0, $args = array()) {
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) {
			$output .= "</ul><!-- .children -->\n";
		}
	    protected function comment( $comment, $depth, $args ) {
	    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '');
	        echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n";
	    	echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n";
	    	echo '<div class="media-body">';
	    	echo '<span class="meta media-heading">Автор: '.get_comment_author()."\n";
	    	//echo ' '.get_comment_author_email();
	    	echo ' '.get_comment_author_url();
	    	echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n";
	    	if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n";
	    	echo "</span>";
	        comment_text()."\n";
	        $reply_link_args = array(
	        	'depth' => $depth,
	        	'reply_text' => 'Ответить',
				'login_text' => 'Вы должны быть залогинены'
	        );
	        echo get_comment_reply_link(array_merge($args, $reply_link_args));
	        echo '</div>'."\n";
	    }
	    public function end_el( &$output, $comment, $depth = 0, $args = array() ) {
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => 'Назад',
	    	'next_text'    => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
	 	if( is_array( $links ) ) {
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
		        else echo "<li>$link</li>"; 
		    }
		   	echo '</ul>';
		 }
	}
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
	    if(is_admin()) return false;
	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true);
	    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js','','',true);
	    wp_enqueue_script('slick-slider', get_template_directory_uri().'/assets/js/slick.min.js','','',true);
	    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js','','',true);
	}
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;
	    wp_enqueue_style( 'bs', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	    wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css' );
	    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/global.css' );
	}
}

if (!class_exists('bootstrap_menu')) {
	class bootstrap_menu extends Walker_Nav_Menu {
		private $open_submenu_on_hover;

		function __construct($open_submenu_on_hover = true) {
	        $this->open_submenu_on_hover = $open_submenu_on_hover;
	    }

		function start_lvl(&$output, $depth = 0, $args = array()) {
			$output .= "\n<ul class=\"dropdown-menu\">\n";
		}
		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
			$item_html = '';
			parent::start_el($item_html, $item, $depth, $args);
			if ( $item->is_dropdown && $depth === 0 ) {
			   if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html);
			   $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
			}
			$output .= $item_html;
		}
		function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
			if ( $element->current ) $element->classes[] = 'active';
			$element->is_dropdown = !empty( $children_elements[$element->ID] );
			if ( $element->is_dropdown ) {
			    if ( $depth === 0 ) {
			        $element->classes[] = 'dropdown';
			        if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover';
			    } elseif ( $depth === 1 ) {
			        $element->classes[] = 'dropdown-submenu';
			    }
			}
			parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
		}
	}
}

if (!function_exists('content_class_by_sidebar')) {
	function content_class_by_sidebar() {
		if (is_active_sidebar( 'sidebar' )) { 
			echo 'col-sm-9';
		} else { 
			echo 'col-sm-12';
		}
	}
}


add_action('customize_register', function($customizer) {
	 $customizer->add_section(
        'section_one', array(
            'title' => 'Логотип сайта',
            'description' => '',
            'priority' => 11,
        )
    );

	$customizer->add_setting('logo'); 
	 
	$customizer->add_control(new WP_Customize_Image_Control($customizer, 'logo', array(
	    'label'    => 'Логотип',
	    'section'  => 'section_one',
	    'settings' => 'logo',
	)));
});

add_action('customize_register', function($customizer) {
	 $customizer->add_section(
        'section_one', array(
            'title' => 'Логотип в подвале',
            'description' => '',
            'priority' => 11,
        )
    );

	$customizer->add_setting('logo_footer'); 
	 
	$customizer->add_control(new WP_Customize_Image_Control($customizer, 'logo_footer', array(
	    'label'    => 'Логотип',
	    'section'  => 'section_two',
	    'settings' => 'logo_footer',
	)));
});

add_action( 'init', 'register_reviews_post_type' ); // Использовать функцию только внутри хука init
 
function register_reviews_post_type() {
	$labels = array(
		'name' => 'Отзывы',
		'singular_name' => 'Отзыв', // админ панель Добавить->Функцию
		'add_new' => 'Добавить отзыв',
		'add_new_item' => 'Добавить новый отзыв', // заголовок тега <title>
		'edit_item' => 'Редактировать отзыв',
		'new_item' => 'Новый отзыв',
		'all_items' => 'Все отзывы',
		'view_item' => 'Просмотр отзыва на сайте',
		'search_items' => 'Искать отзыв',
		'not_found' =>  'Отзывов не найдено.',
		'not_found_in_trash' => 'В корзине нет отзывов.',
		'menu_name' => 'Отзывы' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-testimonial',		
		'has_archive' => true, 
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('reviews', $args);
}


add_action( 'init', 'register_partners_post_type' ); 
 
function register_partners_post_type() {
	$labels = array(
		'name' => 'Партнеры',
		'singular_name' => 'Организация', // админ панель Добавить->Функцию
		'add_new' => 'Добавить организацию',
		'add_new_item' => 'Добавить новую организацию', // заголовок тега <title>
		'edit_item' => 'Редактировать организацию',
		'new_item' => 'Новая организацию',
		'all_items' => 'Все организации',
		'view_item' => 'Просмотр партнера на сайте',
		'search_items' => 'Искать организацию',
		'not_found' =>  'Организаций не найдено.',
		'not_found_in_trash' => 'В корзине нет организаций.',
		'menu_name' => 'Партнеры' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-networking',		
		'has_archive' => true, 
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('partners', $args);
}

add_action( 'init', 'register_product_post_type' ); 
 
function register_product_post_type() {
	$labels = array(
		'name' => 'Товары',
		'singular_name' => 'Товар', // админ панель Добавить->Функцию
		'add_new' => 'Добавить товар',
		'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
		'edit_item' => 'Редактировать товар',
		'new_item' => 'Новый товар',
		'all_items' => 'Все товары',
		'view_item' => 'Просмотр товара на сайте',
		'search_items' => 'Искать товар',
		'not_found' =>  'Товаров не найдено.',
		'not_found_in_trash' => 'В корзине нет товаров.',
		'menu_name' => 'Товары' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-cart',		
		'has_archive' => true, 
		'menu_position' => 10, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('product', $args);
}

add_action( 'init', 'create_product_taxonomies', 0 );
 
function create_product_taxonomies(){

  $labels = array(
	'name' => _x( 'Категории', 'taxonomy general name' ),
	'singular_name' => _x( 'Категории', 'taxonomy singular name' ),
	'search_items' =>  __( 'Искать Категории' ),
	'popular_items' => __( 'Популярные Категории' ),
	'all_items' => __( 'Все Категории' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Редактировать категорию' ),
	'update_item' => __( 'Обновить категорию' ),
	'add_new_item' => __( 'Добавить новую категорию' ),
	'new_item_name' => __( 'Имя новой категории' ),
	'separate_items_with_commas' => __( 'Separate writers with commas' ),
	'add_or_remove_items' => __( 'Добавить или удалить категорию' ),
	'choose_from_most_used' => __( 'Choose from the most used writers' ),
	'menu_name' => __( 'Категории' ),
  );

register_taxonomy('cats', 'product', array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'cats' ),
  ));
}


add_action( 'init', 'register_sales_post_type' ); 
 
function register_sales_post_type() {
	$labels = array(
		'name' => 'Акции',
		'singular_name' => 'Акция', // админ панель Добавить->Функцию
		'add_new' => 'Добавить акцию',
		'add_new_item' => 'Добавить акцию', // заголовок тега <title>
		'edit_item' => 'Редактировать акцию',
		'new_item' => 'Новая акция',
		'all_items' => 'Все акции',
		'view_item' => 'Просмотр акции на сайте',
		'search_items' => 'Искать акцию',
		'not_found' =>  'Акций не найдено.',
		'not_found_in_trash' => 'В корзине нет акций.',
		'menu_name' => 'Акции' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-awards',		
		'has_archive' => true, 
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('sales', $args);
}


add_action( 'init', 'register_services_post_type' );  
function register_services_post_type() {
	$labels = array(
		'name' => 'Услуги',
		'singular_name' => 'Услуга', // админ панель Добавить->Функцию
		'add_new' => 'Добавить услугу',
		'add_new_item' => 'Добавить услугу', // заголовок тега <title>
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'all_items' => 'Все услуги',
		'view_item' => 'Просмотр услуги на сайте',
		'search_items' => 'Искать услугу',
		'not_found' =>  'Услуг не найдено.',
		'not_found_in_trash' => 'В корзине нет услуг.',
		'menu_name' => 'Услуги' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-hammer',		
		'has_archive' => true, 
		'menu_position' => 10, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('services', $args);
}

add_action( 'init', 'create_services_taxonomies', 0 ); 
function create_services_taxonomies(){
  $labels = array(
	'name' => _x( 'Категории', 'taxonomy general name' ),
	'singular_name' => _x( 'Категории', 'taxonomy singular name' ),
	'search_items' =>  __( 'Искать Категории' ),
	'popular_items' => __( 'Популярные Категории' ),
	'all_items' => __( 'Все Категории' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Редактировать категорию' ),
	'update_item' => __( 'Обновить категорию' ),
	'add_new_item' => __( 'Добавить новую категорию' ),
	'new_item_name' => __( 'Имя новой категории' ),
	'separate_items_with_commas' => __( 'Separate writers with commas' ),
	'add_or_remove_items' => __( 'Добавить или удалить категорию' ),
	'choose_from_most_used' => __( 'Choose from the most used writers' ),
	'menu_name' => __( 'Категории' ),
  );

	register_taxonomy('servcat', 'services', array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'servcat' ),
  ));
}


add_action( 'init', 'register_dop_post_type' );  
function register_dop_post_type() {
	$labels = array(
		'name' => 'Дополнительные услуги',
		'singular_name' => 'Дополнительная услуга', // админ панель Добавить->Функцию
		'add_new' => 'Добавить услугу',
		'add_new_item' => 'Добавить услугу', // заголовок тега <title>
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'all_items' => 'Все услуги',
		'view_item' => 'Просмотр услуги на сайте',
		'search_items' => 'Искать услугу',
		'not_found' =>  'Услуг не найдено.',
		'not_found_in_trash' => 'В корзине нет услуг.',
		'menu_name' => 'Дополнительные услуги' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'menu_icon' => 'dashicons-tag',		
		'has_archive' => false, 
		'menu_position' => 12, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('dop', $args);
}

add_action( 'init', 'create_dop_taxonomies', 0 ); 
function create_dop_taxonomies(){
  $labels = array(
	'name' => _x( 'Категории', 'taxonomy general name' ),
	'singular_name' => _x( 'Категории', 'taxonomy singular name' ),
	'search_items' =>  __( 'Искать Категории' ),
	'popular_items' => __( 'Популярные Категории' ),
	'all_items' => __( 'Все Категории' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Редактировать категорию' ),
	'update_item' => __( 'Обновить категорию' ),
	'add_new_item' => __( 'Добавить новую категорию' ),
	'new_item_name' => __( 'Имя новой категории' ),
	'separate_items_with_commas' => __( 'Separate writers with commas' ),
	'add_or_remove_items' => __( 'Добавить или удалить категорию' ),
	'choose_from_most_used' => __( 'Choose from the most used writers' ),
	'menu_name' => __( 'Категории' ),
  );

	register_taxonomy('dopcat', 'dop', array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'dopcat' ),
  ));
}

add_image_size( 'slider_img', 450, 280, true );
add_image_size( 'arhive_img', 570, 370, true );

add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

?>
