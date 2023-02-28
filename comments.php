<?php
/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area md:my-8">



	<?php
	comment_form(
		array(
			'class_submit'  => 'bg-primary text-white cursor-pointer rounded-lg	 py-3 px-6 text-base font-medium font-inter',
			'comment_field' => '<textarea id="comment" name="comment" class="bg-white w-full py-3 px-[18px] focus-visible:outline-0 font-inter" aria-required="true" placeholder="Write your reply..."></textarea>',
		)
	);
	?>


<?php if ( have_comments() ) : ?>
	<div class="comment_number text-center">
		<h2 class="comments-title text-center font-inter text-sm text-[#52525B] font-medium bg-[#F4F4F5] py-2 px-4 block w-[130px] z-10 mx-auto relative mb-10">
			<?php
				printf(
					_nx( '1 comment', '%1$s comments', get_comments_number(), 'comments title', 'tailpress' ),
					number_format_i18n( get_comments_number() ),
					get_the_title()
				);
			?>
		</h2>
			</div>



		<ul class="commentlist">
	<?php 
	wp_list_comments( [ 
		'type'     => 'comment',
		'callback' => 'mytheme_comment',
		'avatar_size' => '64'
	] );
	?>
</ul>






	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav class="comment-navigation" id="comment-nav-above">

			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tailpress' ); ?></h1>

			<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'tailpress' ) ); ?>
					</div>
			<?php } ?>

			<?php if ( get_next_comments_link() ) { ?>
				<div class="nav-next">
					<?php next_comments_link( __( 'Newer Comments &rarr;', 'tailpress' ) ); ?>
				</div>
			<?php } ?>

		</nav><!-- #comment-nav-above -->

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tailpress' ); ?></p>
	<?php endif; ?>










</div>
