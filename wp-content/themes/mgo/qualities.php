<?php 
/**
 * Template Name: Omadused
 */
?>
<?php
get_header(); ?>

<section>
	<div class="container centeralign" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"';?>>
		<div class="centeralign">
		<?php 
		if(get_field('title'))
			{?>
		<div class="slogan">
			<?php echo get_field('title');?>
		</div>
		
		<?php }
		else
		{
			the_title( '<h2 class="title">', '</h2>' );	
		}
		?>
		<div class="intro">
			<?php the_content(); ?>
		</div>
		</div>
		
		<div class="qualities">
			<?php if( have_rows('qualities') ){?>
			<?php	while ( have_rows('qualities') ) : the_row();?>
				<?php $image=get_sub_field('image');?>
				<div class="thumb">
					<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>">
					<p><?php the_sub_field('text'); ?></p>

				</div>				
			<?php endwhile;		
			}?>
		</div>


	</div>
	<?php if ( !is_preview() ) {
    edit_post_link( __( 'Edit page','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>

<?php get_footer(); ?>

