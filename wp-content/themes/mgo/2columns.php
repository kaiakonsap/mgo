<?php 
/**
 * Template Name: Kahe tulbaga
 */
?>
<?php if (  is_preview() ) {
    get_header();
}?>
<section>
	<div class="container columns" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<div class="centeralign">
			<?php if(get_field('column1'))
			{?>
			<?php echo get_field('column1');?>		
			<?php }?>
		</div>
		<div class="centeralign">
			<?php if(get_field('column2'))
			{?>
			<?php echo get_field('column2');?>		
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