<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<section>	
	<div class="container" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>

			<?php 		while ( have_posts() ) : the_post();?>
			<div class="centeralign">
				<?php 

				the_title( '<h2 class="title">', '</h2>' );

				if(get_field('title'))
					{?>
				<div class="slogan">
					<?php echo get_field('title');?>
				</div>

				<?php }
				?>
			</div>

			<?php the_content(); ?>
	</div>
		<?php if ( !is_preview() ) {
	    edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
		}?>
	<?php 		// End the loop.
	endwhile;
	?>
</section>
<?php get_footer(); ?>


