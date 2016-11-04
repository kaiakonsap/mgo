<?php 
/**
 * Template Name: Paremale joondatud pisipiltidega
 */
?>

<?php if (  is_preview() ) {
    get_header();
}?>
<section>
	<?php if (has_post_thumbnail()) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	}
	?>
	<div class="container rightalign backimage" <?php echo 'style="background-image:url('.$feat_image_url.');background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<span class="transparent" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		</span>
		<div class="text centeralign">
			<?php if( have_rows('qualities') ){?>
			<div class="qualities">
				<?php	while ( have_rows('qualities') ) : the_row();?>
					<?php $image=get_sub_field('image');?>
					<div class="thumb inline">
						<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>">
						<p><?php the_sub_field('text'); ?></p>

					</div>				<?php endwhile;		
				}?>
			</div>

			<?php
			the_content(); ?>
			
				<?php if(get_field('extratext'))
			{?>
			<div class="extra">
			<?php echo get_field('extratext');?>	
			</div>	
			<?php }?>
			
		</div>
		
	</div>
	<?php if ( !is_preview() ) {
    edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>
<?php if ( is_preview() ) {
    get_footer();
}?>