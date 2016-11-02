<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Howl
 * @since Howl 1.0
 */
 
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php MOZ_Crumbs::crumbs( 'primary' ); ?>
    <section class="single-banner">
        <div class="site__contain">
            <h1 class="single-banner__header">
                <?php the_title();?>
            </h1>
            <p class="single-banner__author"><?php the_author(); ?></p>
        </div>
    </section>
    
    <div class="site__contain site__contain--single">
        <main class="single" role="main">
            <h2 class="single__header"><?php the_title(); ?></h2>
            <div class="single__infobar">
                <span class="single__author"><?php the_author(); ?></span> |
                <span class="single__date"><?php the_time('F jS, Y'); ?></span> |
                <span class="single__category"><?php the_category( ', ' ); ?></span>
            </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        </main>
        <aside class="single__sidebar">
            <?php get_sidebar(); ?>
        </aside>    
    </div>
<?php endwhile; ?>
 
<?php get_footer(); ?>