<?php
get_header();
while ( have_posts() ){
    the_post();
    get_template_part( "template-parts/content_page" );
}
get_footer();
?>