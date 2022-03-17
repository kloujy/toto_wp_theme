<article id="post-<?php the_ID(); ?>">
	<div> publier le :  <?php the_date(); ?></div>
	<div>tag: <?php the_tags(""); ?></div>
	<h1><?php the_title(); ?></h1>
	<?php if ( has_post_thumbnail() ){ ?>
		<header>
			<figure class="post-thumbnail">
				<?php the_post_thumbnail( "medium_large", array( "loading" => false ) ); ?>
			</figure>
		</header>
	<?php } ?>
	<div>
		<?php the_content(); ?>
	</div>
	<?php comments_template(); ?>
	<?php if ( get_edit_post_link() ){ ?>
		<footer>
			<?php
			edit_post_link( sprintf( esc_html__( "Edit %s", "toto" ), "<span>" . get_the_title() . "</span>" ) );
			?>
		</footer>
	<?php } ?>
</article>