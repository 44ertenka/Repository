<div class="article_share">
	<span class="article_share_title">Share</span>
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/facebook-color-logo.svg" alt="facebook" class="article_share_logo"></a>
	<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/twitter-logo.svg" alt="twitter" class="article_share_logo"></a>
	<a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo $postUrl; ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/linkedin-logo.svg" alt="linkedin" class="article_share_logo"></a>
</div>

<?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
?>