<?php
add_theme_support('menus');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/*---------------------------------------------------------------------------------*/
//ウィジェット
/*---------------------------------------------------------------------------------*/

if (function_exists('register_sidebar')) {

	register_sidebar(array(
        'name' => 'インタビューウィジェット',
        'before_widget' => '<li class="link %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => ''
      ));
  register_sidebar(array(
        'name' => '社員の一日ウィジェット',
        'before_widget' => '<li class="link %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => ''
      ));
}


function add_page_columns($columns) {
  $columns['slug'] = "スラッグ";
    return $columns;
}
function add_page_column_row($column_name, $post_id) {
  if( $column_name == 'slug' ) {
      $post = get_post($post_id);
      $slug = $post->post_name;
      echo esc_attr($slug);
  }
}

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

add_filter( 'manage_pages_columns', 'add_page_columns');
add_action( 'manage_pages_custom_column', 'add_page_column_row', 10, 2);
