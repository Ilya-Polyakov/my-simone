<?php
/**
 * template for aside
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">

                                <?php
                        // Display a thumb tack in the top right hand corner if this post is sticky
                        if (is_sticky()) {
                            echo '<i class="fa fa-thumb-tack sticky-post"></i>';
                        }
                        ?>
        
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
            <?php my_simone_posted_on(); ?>
                        <?php edit_post_link( __( ' | Edit', 'my-simone' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
                
                
