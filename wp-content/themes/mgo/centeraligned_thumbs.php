<?php 
/**
 * Template Name: Keskjoondatud pisipiltidega sisu
 */
?>
<?php if (  is_preview() ) {
	get_header();
}?>
<section>
	<div class="container centeralign" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<?php 
		if(get_field('title'))
			{?>
		<div class="intro">
			<?php echo get_field('title');?>
		</div>
		
		<?php }
		else
		{
			the_title( '<h2 class="title">', '</h2>' );	
		}
		?>
		<?php if( have_rows('thumbs') ){?>
		<div>
			<?php	while ( have_rows('thumbs') ) : the_row();?>
				<?php $thumb=get_sub_field('thumb');?>
				<div class="thumb largemargin">
					<div class="thumb round">
						<img src="<?php echo $thumb['url'];?>" alt="<?php echo $thumb['alt']?>" width="<?php echo $thumb['width']?>" height="<?php echo $thumb['height']?>">
					</div>	
					<p><?php the_sub_field('title'); ?></p>
				</div>
			<?php endwhile;	?>
		</div>	
		<?php }?>
		<div class="smalltekst">	
			<?php the_content(); ?>
		</div>

			<?php if(get_field('extratext'))
			{?>		
			<div class="extra">
			<?php echo get_field('extratext');?>		
			</div>
			<?php }?>
		


	</div>
	<?php if ( !is_preview() ) {
		edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>
<?php if ( is_preview() ) {
	get_footer();
}?>