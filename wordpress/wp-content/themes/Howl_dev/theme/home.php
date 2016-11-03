<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Howl
 * @since Howl 1.0
 */

get_header(); ?>
<section class="site-banner">
    <div class="site__contain">
        <h1 class="site-banner__header">
            Blog
        </h1>
    </div>
</section>


<?php while ( have_posts() ) : the_post(); ?>
    <div class="site__contain site__contain--sidebar">
        <main class="main-content main-content--home" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-contain post-contain--home'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </article>
        </main>
        <aside class="sidebar-content sidebar-content--home">
            <?php get_sidebar(); ?>
        </aside>    
    </div>
<?php endwhile; ?>
 
<?php get_footer(); ?>