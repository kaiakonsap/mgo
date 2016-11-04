<?php 
/**
 * Template Name: Vasakule joondatud pisipildiga
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
	<div class="container leftalign aligncenter rightthumb" <?php echo 'style="background-image:url('.$feat_image_url.');background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<span class="transparent" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		</span>
		<div class="text">	
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
			<?php
			the_content(); ?>
		</div>
		<?php if( have_rows('thumbs') ){?>
		<?php	while ( have_rows('thumbs') ) : the_row();?>
				<?php $thumb=get_sub_field('thumb');?>
			<div class="thumb leftalign">
				<div class="thumb round">
					<img src="<?php echo $thumb['url'];?>" alt="<?php echo $thumb['alt']?>" width="<?php echo $thumb['width']?>" height="<?php echo $thumb['height']?>">
				</div>		<p><?php the_sub_field('title'); ?></p>
			</div>				<?php endwhile;		
		}?>

	</div>
	<?php if ( !is_preview() ) {
		edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>
<?php if ( is_preview() ) {
	get_footer();
}?>