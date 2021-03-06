<?php
/**
 * @package Coller
 */
?>

<?php if (has_post_thumbnail()) : 
		$grid_class = "col-md-9 col-sm-8";
	else: 
		$grid_class = "col-md-12";
endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 grid coller'); ?>>
		
		<header class="entry-header">
				<h1 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="postedon"><?php coller_posted_on(); ?></div>
		</header>	
		
		<?php if (has_post_thumbnail()) : ?>
			<div class="featured-thumb col-md-3 col-sm-4">
					<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('coller-default-thumb'); ?></a>
				
			</div><!--.featured-thumb-->
		<?php endif; ?>	
		
		
		<div class="out-thumb <?php echo $grid_class; ?>">			
			<span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>
			<span class="readmore"><a href="<?php the_permalink() ?>"><?php _e('Read More','coller'); ?></a></span>
		</div><!--.out-thumb-->
			
		
		
</article><!-- #post-## -->