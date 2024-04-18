<?php function my_portfolio_enqueue_styles() {
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('some-font', "URL-TO-GOOGLE-FONT");
    wp_enqueue_style('my-portfolio-style', get_stylesheet_uri());
    wp_enqueue_style('hexagon', get_template_directory_uri() . "/hexagon.css");
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_styles');
function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "acf_remove_gutenberg");