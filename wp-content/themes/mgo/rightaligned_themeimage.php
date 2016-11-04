<?php 
/**
 * Template Name: Paremalej sisu teemapilt ja pildip
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
	<div class="container aligncenter backimage" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>

			<div class="medium">
			<?php if(get_field('image'))
			{?>
			<?php $image=get_field('image');?>
			<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" width="<?php echo $image['width']?>" height="<?php echo $image['height']?>">


			<?php }?>
			<?php if(get_field('imagetitle'))
			{?>
			<?php echo get_field('imagetitle');?>		
			<?php }?>
		</div>
		<div class="text">	
			<?php
			the_content(); ?>
		</div>
</div>
	<?php if ( !is_preview() ) {
    edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>
<?php if ( is_preview() ) {
    get_footer();
}?>