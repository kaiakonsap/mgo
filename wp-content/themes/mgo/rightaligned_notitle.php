<?php 
/**
 * Template Name: Paremale joondatud pealkirjata
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
	<div class="container rightalign backimage highcontrast" <?php echo 'style="background-image:url('.$feat_image_url.');background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<span class="transparent" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		</span>
		<div class="text centeralign">	
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