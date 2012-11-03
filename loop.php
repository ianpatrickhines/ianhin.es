<?php
/**
 * @package WordPress
 */
?>

        <div class="nine columns offset-by-one" id="content">
		<?php if (have_posts()) : ?>			
		<?php query_posts('showposts=15'); while (have_posts()) : the_post(); ?><!--  the Loop -->
		<!--
{block:NewDayDate}

            <header class="first-day-date" id="{Year}-{MonthNumberWithZero}-{DayOfMonthWithZero}">
                <p class="separator ss-icon">navigatedown</p>

                <h3>{DayOfWeek}, {Month} {DayOfMonth}, {Year}</h3>
            </header>{/block:NewDayDate} 
-->
            
			<?php if (in_category('Links')) : ?>            
			<?php ob_start(); echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); $shorturl = ob_get_clean(); ?>
            <div class="linked">                
                <article class="link linked row indexPage" id="post-<?php the_ID(); ?>">
                    <header class="one column alpha">
                        <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">link</a></span></p>
                    </header>

                    <div class="eight columns omega">
                        <h2><a href="<?php the_linked_list_link(); ?>"><?php the_title(); ?></a></h2>
						<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                        
                        <?php the_content(); ?>
                        
						<p class="social"><?php if (function_exists('simple_url_shortener')) : ?><a href="<?php the_permalink(); ?>" rel="bookmark" class="ss-icon alpha" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php else : ?><a href="<?php the_permalink() ?>" class="ss-icon alpha" rel="bookmark" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php endif; ?><a class="ss-icon ss-social middle" href="mailto:?subject=A%20link%20post%20from%20ianpatrickhines.com&body=<?php the_title_attribute(); ?>%0D%0A%0D%0A<?php the_permalink() ?>" title="Email">email</a><a href="<?php the_permalink(); ?>#disqus_thread" class="ss-icon omega" title="Comment">chat</a></p> 
                    </div>
                </article>
            </div> 
            
            <?php elseif (in_category('Articles')) : ?>
			<?php ob_start(); echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); $shorturl = ob_get_clean(); ?>
            <article class="article indexPage" id="post-<?php the_ID(); ?>">
                <header>
                    <h2><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>"><?php the_title(); ?></a></h2>
					<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                </header>
                
                <?php the_content(); ?>
                
				<p class="social"><?php if (function_exists('simple_url_shortener')) : ?><a href="<?php the_permalink(); ?>" rel="bookmark" class="ss-icon alpha" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php else : ?><a href="<?php the_permalink() ?>" class="ss-icon alpha" rel="bookmark" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php endif; ?><a class="ss-icon ss-social middle" href="mailto:?subject=A%20post%20from%20ianpatrickhines.com&body=<?php the_title_attribute(); ?>%0D%0A%0D%0A<?php the_permalink() ?>" title="Email">email</a><a href="<?php the_permalink(); ?>#disqus_thread" class="ss-icon omega" title="Comment">chat</a></p> 
                
                
            </article>
            
            <?php elseif (in_category('Interviews')) : ?>
			<?php ob_start(); echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); $shorturl = ob_get_clean(); ?>
            <article class="article indexPage" id="post-<?php the_ID(); ?>">
                <header>
                    <h2><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>"><?php the_title(); ?></a></h2>
					<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                </header>
                
                <?php the_content(); ?>
                
				<p class="social"><?php if (function_exists('simple_url_shortener')) : ?><a href="<?php the_permalink(); ?>" rel="bookmark" class="ss-icon alpha" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php else : ?><a href="<?php the_permalink() ?>" class="ss-icon alpha" rel="bookmark" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php endif; ?><a class="ss-icon ss-social middle" href="mailto:?subject=A%20post%20from%20ianpatrickhines.com&body=<?php the_title_attribute(); ?>%0D%0A%0D%0A<?php the_permalink() ?>" title="Email">email</a><a href="<?php the_permalink(); ?>#disqus_thread" class="ss-icon omega" title="Comment">chat</a></p> 
                
                
            </article>
            
            <?php elseif (in_category('Quotes')) : ?>
           	<?php ob_start(); echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); $shorturl = ob_get_clean(); ?> 
            <article class="link linked quote row indexPage" id="post-<?php the_ID(); ?>">
                <header class="one column alpha">
                    <p><span class="permalink"><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>" class="ss-icon">quote</a></span></p>
                </header>

                <div class="eight columns omega">
                    <?php
$quote = get_post_meta($post->ID, 'quote', true);
if ($quote == '')
{ ?>
<?php } else { ?>
<blockquote><?php echo $quote; ?></blockquote><?php } ?>
                    
                    <h2 class="right">&mdash;<a href="<?php the_linked_list_link(); ?>"><?php
$author = get_post_meta($post->ID, 'author', true);
if ($author == '')
{ ?>
<?php } else { ?>
<?php echo $author; ?><?php } ?></a></h2>
					<time datetime="<?php echo get_the_time('Y-m-d') ?>"><?php echo get_the_time('F jS, Y') ?></time>
                    
				<p class="social"><?php if (function_exists('simple_url_shortener')) : ?><a href="<?php the_permalink(); ?>" rel="bookmark" class="ss-icon alpha" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php else : ?><a href="<?php the_permalink() ?>" class="ss-icon alpha" rel="bookmark" title="Permanent Link to '<?php the_title_attribute(); ?>'">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><?php endif; ?><a class="ss-icon ss-social middle" href="mailto:?subject=A%20post%20from%20ianpatrickhines.com&body=<?php $quote = get_post_meta($post->ID, 'quote', true); if ($quote == '') { ?><?php } else { ?><?php echo $quote; ?><?php } ?>%0D%0A%0D%0A<?php the_permalink() ?>" title="Email">email</a><a href="<?php the_permalink(); ?>#disqus_thread" class="ss-icon omega" title="Comment">chat</a></p> 

                </div>
            </article>

            <?php else : ?>
            <?php ob_start(); echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); $shorturl = ob_get_clean(); ?>
            <article class="article" id="post-<?php the_ID(); ?>">
                <header>
                    <h2><a href="<?php if (function_exists('simple_url_shortener')) : ?><?php echo simple_url_shortener('','service=bit.ly+key&apikey=R_a6dc414291bb882024ddd99690f5eb61&login=ianhines&cache=yes'); ?><?php else : ?><?php the_permalink() ?><?php endif ; ?>"><?php the_title(); ?></a></h2>
                    <time datetime="<?php the_time('Y-M-j') ?>"><?php the_time('M j, Y') ?></time>
                </header>
                
                <?php the_content(); ?>
                
				<p class="social"><a class="ss-icon alpha" href="<?php the_permalink() ?>" title="Bookmark">bookmark</a><a class="ss-icon ss-social middle" href="http://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title_attribute(); ?>&via=ianpatrickhines&related=yarrcat" title="Tweet" target="_blank">twitter</a><a class="ss-icon ss-social middle" href="mailto:?subject=A%20post%20from%20ianpatrickhines.com&body=<?php the_title_attribute(); ?>%0D%0A%0D%0A<?php the_permalink() ?>" title="Email">email</a><a href="<?php the_permalink(); ?>#disqus_thread" class="ss-icon omega" title="Comment">chat</a></p> 
                
                
            </article>
           
		<?php endif; ?><?php endwhile; ?><?php else : ?>  
		<?php endif; ?>
		
		<nav class="page">
                <ul>
                    <li class="page-prev"><a href="http://ianhin.es/archives/">← Browse The Full Archive</a></li>
                </ul>
            </nav>
        </div>