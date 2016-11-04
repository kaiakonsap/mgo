<?php 
/**
 * Template Name: Keskjoondatud sisu
 */
?>
<?php if (  is_preview() ) {
	get_header();
}?>
<section>
	<div class="container centeralign">
		<?php the_title( '<h2 class="title">', '</h2>' ); ?>
		<div class="smalltekst">
			<?php the_content(); ?>
		</div>

	</div>
	<?php if ( !is_preview() ) {
		edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>
<?php if ( is_preview() ) {
	get_footer();
}?>