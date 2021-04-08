<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bizwhoop
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="col-md-12">
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				 printf(esc_html('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'bizwhoop'), 
				 number_format_i18n( get_comments_number()), 
				 '<span>' . get_the_title() . '</span>');
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bizwhoop' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bizwhoop' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bizwhoop' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bizwhoop' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bizwhoop' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bizwhoop' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.
	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php esc_html_e('Comments are closed.','bizwhoop'); ?></p>
	<?php
	endif; ?>
	<div class="bizwhoop-card-box padding-20">
	<?php  
	 $fields=array(
		'author' => '<div class="row"><div class="col-md-6"><div class="form-group"><input class="form-control" name="author" id="author" type="text"/><label>'.__('Name:','bizwhoop').'</label></div></div>',
		'email' => '<div class="col-md-6"><div class="form-group"><input class="form-control" name="email" id="email" value=""   type="email"><label>'.__('Email:','bizwhoop').'</label></div></div></div>',
		);
		function bizwhoop_fields($fields) { 
			return $fields;
		}
		add_filter('comment_form_default_fields','bizwhoop_fields');
			$defaults = array(
			'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field'=> '<div class="row">
                  <div class="col-md-12"> 
                    <!-- Textarea -->
                    <div class="form-group">
			<textarea id="comments" rows="6" class="form-control" name="comment"  type="text"></textarea><label>'.__('Message:','bizwhoop').'</label></div></div></div>',		
			'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as ",'bizwhoop' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'bizwhoop').'</a>' . '</p>',
			'id_submit'=> 'comment_btn1',
			'label_submit'=>__( 'Send Message','bizwhoop'),
			'comment_notes_after'=> '',
			'comment_notes_before' => '',
			'title_reply'=> '<div class="bizwhoop-heading-bor-bt"><h5>'.__( 'Leave a Reply','bizwhoop').'</h5></div>',
			'id_form'=> 'commentform'
			);
		comment_form($defaults);
	?>
	</div>

</div><!-- #comments -->
</div>