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
    <?php //MOZ_Crumbs::crumbs( 'primary' ); ?>
    <section class="site-banner">
        <div class="site__contain">
            <h1 class="site-banner__header">
                <?php the_title();?>
            </h1>
            <p class="site-banner__author"><?php the_author(); ?></p>
        </div>
    </section>
    
    <div class="site__contain site__contain--sidebar">
        <main class="main-content main-content--single" role="main">
            <h2 class="single__header"><?php the_title(); ?></h2>
            <div class="single__infobar">
                <span class="single__author"><?php the_author(); ?></span> |
                <span class="single__date"><?php the_time('F jS, Y'); ?></span> |
                <span class="single__category"><?php the_category( ', ' ); ?></span>
            </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--single'); ?>>
                <?php the_content(); ?>
            </article>
        </main>
        <aside class="sidebar-content sidebar-content--single">
            <?php get_sidebar(); ?>
        </aside>    
    </div>
<?php endwhile; ?>
 
<?php get_footer(); ?>