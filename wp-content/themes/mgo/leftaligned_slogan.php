<?php 
/**
 * Template Name: vasakjoondatud sloganiga peal
 */
?>
<?php if (  is_preview() ) {
    get_header();
}?>
<section>
	<div class="container" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<div class="centeralign">
			<?php 

			the_title( '<h2 class="title">', '</h2>' );

			if(get_field('title'))
				{?>
			<div class="intro">
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
</section>
<?php if ( is_preview() ) {
    get_footer();
}?>