<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Draco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php

		$format = get_post_format(get_the_ID());
		if ( false === $format ) {
			$format = '';
		}
		$icon_post="";
		if(is_sticky()) {
			$icon_post='<span class="dashicons dashicons-sticky"></span> ';
		}
		if($format!="") {
			if($format=="link") $format="links";
			$icon_post.='<span class="dashicons dashicons-format-'.$format.'"></span> ';
		}

		if ( !is_single() && !is_page() ) {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$icon_post, '</a></h2>' );
		}


		if(!is_page()) {

		?>

			<div class="postinfo">

<?php 

	//echo $icon_post;

    $time = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time = sprintf( $time,
      get_the_date( DATE_W3C ),
      get_the_date(),
      get_the_modified_date( DATE_W3C ),
      get_the_modified_date()
    );

	echo '<span class="dashicons-before dashicons-clock"> '.$time.'</span>';
	
	echo '<span class="dashicons-before dashicons-admin-users"> '.get_the_author().'</span>';

	if(has_category()) {
		echo '<span class="dashicons-before dashicons-category"> ';
		the_category(', ');
		echo '</span>';
	}

	if(has_tag()) {
		echo '<span class="dashicons-before dashicons-tag"> ';
		the_tags('');
		echo '</span>';
	}

	if (comments_open()){
		echo '<span class="dashicons-before dashicons-testimonial"> ';
		comments_popup_link('', '1', '%');
		echo '</span>';
	}
 ?>
</div>

<?php } ?>

	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && 5==4 && ! is_single() && !is_page() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'draco-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>


	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */

		if(!is_single() && !is_page())  the_excerpt();
		else the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'draco' ),
			get_the_title()
		) );


		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'draco' ),
			'after'       => '</div>',
			'link_before' => '<span class="button">',
			'link_after'  => '</span>',
		) );

		if ( !is_single() && !is_page() ) {

			?>
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="button"><?php echo esc_html__( 'Read more', 'draco' ); ?></a>
			<?php
		}

		?>


	</div><!-- .entry-content -->

</article><!-- #post-## -->
