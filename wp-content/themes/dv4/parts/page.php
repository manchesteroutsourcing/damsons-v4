<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dv4
 */

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

?>

<div class="col4 page-area__post margin0">
    <a class="blog__link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post__content">
            <div class="post__title">
                <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            </div>
            <?php if ( 'page' === get_post_type() ) : ?>
            <div class="post__text">
                <?php the_excerpt(); ?>
            </div>
            <div class="post__meta">
                <span><?php the_category(); ?></span> 
            </div>
            <div class="post__button">
                <button class="button button--request button--yellow">Visit page <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
            <?php endif; ?>
        </div>
    </article>
</div>