<?php if ( has_nav_menu( "primary" ) ){ ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse">
	<?php 
        wp_nav_menu([
           "menu" => "primary",
           "container" => "",
           "theme_location" => "primary",
           "items_wrap" => '<ul id="" class="navbar-nav">%3$s</ul>'
        ]);
        get_search_form();
	?>
	</div>
</nav>
<?php } ?>