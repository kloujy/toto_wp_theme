<?php 
get_header();
while ( have_posts() ){
    the_post();
    get_template_part( "template-parts/content_search" );
}
the_posts_pagination();
get_footer();
?>