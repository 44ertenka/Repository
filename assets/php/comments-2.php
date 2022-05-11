<div class="commentsSection">
	<div class="commentsSection_header">
		<span class="commentsSection_header_title">
			<?php
				$comment_count = get_comments_number();
				echo $comment_count . ' comments'; 
			?>
		</span>
	</div>
	<div class="commentsSection_post">
		<?php
			$commenter = wp_get_current_commenter();
			$options = [
				'fields' => [
					'author' => '<div class="comments-form__inputs"><div class="comment-form-author">
									<input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" />
								</div>',
					'email'  => '<div class="comment-form-email">																
									<input id="email" placeholder="E-mail*" required name="email" type="email" ' . ' value=""' . $aria_req . $html_req  . ' />
								</div></div>',															
					'cookies' => '',
				],
				'comment_field'        => '<div class="comment-form-comment">
												<textarea id="comment" placeholder="Your comment" name="comment" aria-required="true" required="required"></textarea>
											</div>',
				'must_log_in'          => '',
				'logged_in_as'         => '<p class="logged-in-as"></p>',
				'comment_notes_before' => '',
				'comment_notes_after'  => '',
				'id_form'              => 'commentform',
				'id_submit'            => 'submit',
				'class_form'           => 'comment-form',
				'class_submit'         => 'submit',
				'name_submit'          => 'submit',
				'title_reply'          => __( 'Leave new comment' ),
				'title_reply_to'       => __( 'Leave a Reply to %s' ),
				'title_reply_before'   => '<span class="comments-form__title">',
				'title_reply_after'    => '</span>',
				'cancel_reply_before'  => ' <small>',
				'cancel_reply_after'   => '</small>',
				'cancel_reply_link'    => __( 'Cancel reply' ),
				'label_submit'         => __( 'Publish' ),
				'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
				'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
				'format'               => 'xhtml',
			];
			comment_form( $options );
		?>
	</div>
	<div class="commentsSection_comments">
		<?php
			if ( have_comments() ) :
		?>
			<ol class="comment-list">
				<?php
					function my_comments_callback( $comment, $args, $depth ) {
						$GLOBALS['comment'] = $comment;
						// print_r($comment);
						?>
						<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
							<div id="comment-<?php comment_ID(); ?>" class="comment">
								<div><?= $comment->comment_author ?></div>
								<div class="comment-content"><?php comment_text(); ?></div>
								<div class="reply">
									<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
								</div>
							</div>
						</li>
						<?php
					}
					wp_list_comments(
						array(
							'avatar_size' => 60,
							'style'       => 'ol',
							'short_ping'  => true,
							'per_page' => 10, 
							'reverse_top_level' => false,
							'callback' => 'my_comments_callback'
						)
					);
				?>
			</ol>
		<?php endif; ?>
	</div>
</div>
