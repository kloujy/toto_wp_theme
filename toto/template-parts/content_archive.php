<article id="post-<?php the_ID(); ?>" class="toto-archive-container">
	<h1><?php the_title(); ?></h1>
	<div> publier le :  <?php the_date(); ?></div>
	<?php if ( has_post_thumbnail() ){ ?>
		<header>
			<figure class="post-thumbnail">
				<?php
				the_post_thumbnail( "thumbnail", array( "loading" => false ) );
				?>
			</figure>
		</header>
	<?php } ?>
	<div>
		<?php the_excerpt(); ?>
	</div>
	<a href="<?php the_permalink(); ?>"> read more </a>
</article>