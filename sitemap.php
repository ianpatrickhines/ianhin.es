<?php
/*
Template Name: Sitemap
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
get_header(); ?>
<?php get_sidebar(); ?>

<div class="eight columns offset-by-two archive" id="content">
	<article class="article permalink" id="heading">
        <header>       
		<h2>Previous Articles</h2>
        </header>
        
        <p>Below is every entry published on ianhin.es.</p>
	</article>
	
	<?php while(have_posts()) : the_post(); ?>
	<?php $myposts = get_posts('numberposts=-1&offset=0'); foreach($myposts as $post) : ?>

	    <?php if (in_category('Articles')) : ?>

        <div class="linked">                
                <article class="link linked row permalink" id="articles">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">compose</a></span></p>
                    </header>

                    <div class="seven columns omega">
                        <h2><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>"><?php the_title(); ?></a></h2>
						<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                        
                    </div>
                </article>
            </div>
            
	    <?php elseif (in_category('Interviews')) : ?>
            
            <div class="linked">                
                <article class="link linked row permalink" id="articles">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">users</a></span></p>
                    </header>

                    <div class="seven columns omega">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                        
                    </div>
                </article>
            </div>
            
        <?php elseif (in_category('Links')) : ?>

        <div class="linked">                
                <article class="link linked row permalink" id="articles">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">link</a></span></p>
                    </header>

                    <div class="seven columns omega">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                        
                    </div>
                </article>
            </div>
            
        <?php elseif (in_category('Quotes')) : ?>

        <div class="linked">                
                <article class="link linked row permalink" id="articles">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">quote</a></span></p>
                    </header>

                    <div class="seven columns omega">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                        
                    </div>
                </article>
            </div>
            
        <?php else : ?>
        <?php endif ; ?>
             
    <?php endforeach; ?>
	<?php endwhile; ?>


	<article class="article permalink" id="heading">
        <header>       
		<h2>Subscribe To Future Entries</h2>
        </header>
	</article>
	
        <div class="linked">                
                <article class="link linked row permalink" id="subscribe">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="http://feeds.feedburner.com/ianpatrickhines" class="ss-icon">rss</a></span></p>
                    </header>

                    <div class="seven columns omega">                        
                        <h2><a href="http://feeds.feedburner.com/ianpatrickhines" title="Subscribe via RSS">Full Content RSS Feed</a></h2>
                    </div>
                </article>
            </div> 
            
            <div class="linked">                
                <article class="link linked row indexPage" id="subscribe">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="https://twitter.com/intent/user?screen_name=ianpatrickhines" class="ss-icon ss-social">twitter</a></span></p>
                    </header>

                    <div class="seven columns omega">                        
                        <h2><a href="https://twitter.com/intent/user?screen_name=ianpatrickhines" title="Follow @ianpatrickhines on Twitter">Follow on Twitter</a></h2>
                    </div>
                </article>
            </div> 
            
	</div>
<?php get_footer(); ?>