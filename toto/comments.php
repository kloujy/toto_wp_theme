<?php
if ( have_comments() ){
?>
    <h2>
    	<?php echo get_comments_number(); ?> commentaires
    </h2>    
    <ol>
    	<?php
    	wp_list_comments([
            "avatar_size" => 0,
        	"style" => "ul",
    	]);
    	?>
    </ol>
<?php }

	comment_form(
		array(
			"title_reply"        => esc_html__( "Laisse un commentaire", "toto" ),
			"title_reply_before" => '<h2 id="reply-title" class="comment-reply-title">',
			"title_reply_after"  => "</h2>",
		)
	);
?>