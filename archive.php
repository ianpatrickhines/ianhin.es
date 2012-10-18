<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
get_header(); ?>
<?php get_sidebar(); ?>

<div class="eight columns offset-by-two" id="content">
<?php if (have_posts()) : ?>
	<article class="article permalink" id="heading">
        <header>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Archive of entries formatted as &#8216;<?php single_cat_title(); ?>&#8217;</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Archive of entries about &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive of entries posted on <?php echo get_the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive of entries posted in <?php echo get_the_time('F Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive of entries posted in <?php echo get_the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
		<?php } ?>
        </header>
	</article>
	
        <?php while (have_posts()) : the_post(); ?>    
            <article class="article indexPage" id="post-<?php the_ID(); ?>">
                <header>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                </header>
                
                <?php the_excerpt(); ?>
                
                </article>
            <?php endwhile; ?>
            
            <nav class="page">
                <ul>
                    <li class="page-prev"><a href="http://ianhin.es/archives/">← Browse The Full Archive</a></li>
                </ul>
            </nav>
            
            <?php else : ?>
			<?php endif; ?>
	</div>
<?php get_footer(); ?>