<?php
add_theme_support('post-thumbnails');
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
}

function register_main_menu() {
  register_nav_menu('main-menu',__( 'Navbar' ));
}
add_action( 'init', 'register_main_menu' );

function register_drop_menu() {
  register_nav_menu('drop-menu',__( 'Dropdown' ));
}
add_action( 'init', 'register_drop_menu' );

function filter_ptags_on_images($content){
return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'primary-widget-area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function improved_trim_excerpt($text) { // improve the excerpt code (img tags, embedded videos etc)
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace('\]\]\>', ']]&gt;', $text);
    $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
    $text = strip_tags($text, '<p> <img> <iframe>');
    $excerpt_length = 55;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words)> $excerpt_length) {
      array_pop($words);
      array_push($words, '[...] <br /><br /><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &rarr;</a>');
      $text = implode(' ', $words);
    }
  }
return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');
?>



