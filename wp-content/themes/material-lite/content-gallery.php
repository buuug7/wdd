<?php
/**
 * @version    1.0
 * @package    Material Lite
 * @author     Ghuwad Team <contact@ghuwad.com>
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.ghuwad.com
 */
$gallery = get_post_gallery();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('section--center mdl-card mdl-shadow--2dp'); ?>>
    <header>
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="meta bordered">
            <?php material_lite_meta();?>
        </div>
    </header>

	<?php if ( $gallery && !post_password_required()) : ?>
	<div class="entry-gallery">
		<?php echo $gallery; ?>
	</div>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
	<div class="entry-thumb mdl-card__media mdl-shadow--2dp">
		<?php the_post_thumbnail('full'); ?>
	</div>
	<?php endif; ?>

    <div class="entry-content">
    	<?php
    	$content = material_lite_strip_shortcode( get_the_content(), 'gallery' );
        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) );
        echo $content;
    	?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'material-lite') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div>
</article>