<?php 
/**
 * Template Name:  pisipildid
 */
?>
<?php if (  is_preview() ) {
	get_header();
}?>
<section>
	<div class="container centeralign" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>

		<?php if( have_rows('thumbs') ){?>
		<?php	while ( have_rows('thumbs') ) : the_row();?>
			<?php $thumb=get_sub_field('thumb');?>
			<div class="thumb fullthumbs">
				<div class="thumb round">
				<img src="<?php echo $thumb['url'];?>" alt="<?php echo $thumb['alt']?>" width="<?php echo $thumb['width']?>" height="<?php echo $thumb['height']?>">
				</div>	<p><?php the_sub_field('title'); ?></p></div>				<?php endwhile;		
			}?>
		</div>
		<?php if ( !is_preview() ) {
			edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
		}?>
	</section>
	<?php if ( is_preview() ) {
		get_footer();
	}?>