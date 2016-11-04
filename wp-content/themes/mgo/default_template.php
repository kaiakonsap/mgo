<?php 
/**
 * Template Name: default
 */

get_header(); ?>

<section>
	<div class="container" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
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
	<?php edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' ); ?>
</section>


<?php get_footer(); ?>

